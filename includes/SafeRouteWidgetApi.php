<?php

/**
 * API-скрипт виджетов SafeRoute для WordPress
 *
 * @version 2.2
 */
class SafeRouteWidgetApi
{
    /**
     * @var string Токен авторизации
     */
    private $token;

    /**
     * @var string|int ID магазина
     */
    private $shopId;

    /**
     * @var array Данные запроса
     */
    private $data;

    /**
     * @var string HTTP-метод запроса
     */
    private $method = 'POST';

    /**
     * Возвращает IP-адрес пользователя
     *
     * @return string IP-адрес
     */
    private function getClientIP()
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];

        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @param string $url URL запроса
     * @return bool
     */
    private function isHtmlRequest(string $url): bool
    {
        preg_match("/\.html$/", $url, $m);
        return (bool) $m;
    }


    /**
     * @param string $token Токен авторизации
     * @param string|int $shopId ID магазина
     */
    public function __construct($token = null, $shopId = null)
    {
        $this->setToken($token);
        $this->setShopId($shopId);
    }

    /**
     * Сеттер токена авторизации
     *
     * @param string $token Токен авторизации
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    /**
     * Сеттер ID магазина
     *
     * @param string|int $shopId ID магазина
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * Сеттер данных запроса
     *
     * @param array $data Данные запроса
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * Сеттер метода запроса
     *
     * @param string $method Метод запроса
     */
    public function setMethod(string $method)
    {
        $this->method = strtoupper($method);
    }

    /**
     * Отправляет запрос
     *
     * @param string $url URL
     * @return string|false
     */
    public function submit(string $url)
    {
        if (!preg_match('/\w+\.saferoute\.ru$/', parse_url($url,  PHP_URL_HOST))) return '';

        // Загрузка кода виджета
        if ($this->isHtmlRequest($url))
        {
            return wp_remote_get($url, [
                'timeout'   => 30,
                'sslverify' => false,
            ])['body'];
        }
        // Запрос к API
        else
        {
            $headers = [
                'Authorization' => "Bearer $this->token",
                'Shop-Id'       => $this->shopId,
                'From-Widget'   => 1,
            ];

            if (isset($this->data['ip']) && !$this->data['ip']) {
                $ip = $this->getClientIP();
                if ($ip !== '::1' && $ip !== '127.0.0.1') $this->data['ip'] = $ip;
            }

            if ($this->method === 'GET')
            {
                $res = wp_remote_get($url . '?' . http_build_query($this->data), [
                    'timeout'   => 30,
                    'headers'   => $headers,
                    'sslverify' => false,
                ]);
            }
            else
            {
                $res = wp_remote_post($url, [
                    'body'      => $this->data,
                    'timeout'   => 30,
                    'headers'   => $headers,
                    'sslverify' => false,
                ]);
            }

            $data = json_decode($res['body']);

            return ($res['response']['code'] === 200)
                ? json_encode(['status' => 200, 'data' => $data])
                : json_encode([
                    'status' => $res['response']['code'],
                    'code' => isset($data->code) ? $data->code : null,
                ]);
        }
    }
}