<?php

require_once 'SafeRouteWooCommerceBase.php';

/**
 * Класс списка стран
 */
final class SafeRouteWooCommerceCountries extends SafeRouteWooCommerceBase
{
    /**
     * Возвращает список стран в формате "ISO-код" => "Название"
     * @return array
     */
    public static function get(): array
    {
        return [
            'CN' => __('China', self::TEXT_DOMAIN),
            'RU' => __('Russia', self::TEXT_DOMAIN),
            'BY' => __('Belarus', self::TEXT_DOMAIN),
            'UA' => __('Ukraine', self::TEXT_DOMAIN),
            'KZ' => __('Kazakhstan', self::TEXT_DOMAIN),
            'MY' => __('Malaysia', self::TEXT_DOMAIN),
            'KP' => __('North Korea', self::TEXT_DOMAIN),
            'KR' => __('South Korea', self::TEXT_DOMAIN),
            'TW' => __('Taiwan', self::TEXT_DOMAIN),
            'CH' => __('Switzerland', self::TEXT_DOMAIN),
            'GB' => __('United Kingdom', self::TEXT_DOMAIN),
            'US' => __('USA', self::TEXT_DOMAIN),
            'DE' => __('Germany', self::TEXT_DOMAIN),
            'FR' => __('France', self::TEXT_DOMAIN),
            'PL' => __('Poland', self::TEXT_DOMAIN),
            'AF' => __('Afghanistan', self::TEXT_DOMAIN),
            'AL' => __('Albania', self::TEXT_DOMAIN),
            'DZ' => __('Algeria', self::TEXT_DOMAIN),
            'AS' => __('American Samoa', self::TEXT_DOMAIN),
            'AD' => __('Andorra', self::TEXT_DOMAIN),
            'AO' => __('Angola', self::TEXT_DOMAIN),
            'AI' => __('Anguilla', self::TEXT_DOMAIN),
            'AQ' => __('Antarctica', self::TEXT_DOMAIN),
            'AG' => __('Antigua and Barbuda', self::TEXT_DOMAIN),
            'AR' => __('Argentina', self::TEXT_DOMAIN),
            'AM' => __('Armenia', self::TEXT_DOMAIN),
            'AW' => __('Aruba', self::TEXT_DOMAIN),
            'AU' => __('Australia', self::TEXT_DOMAIN),
            'AT' => __('Austria', self::TEXT_DOMAIN),
            'AZ' => __('Azerbaijan', self::TEXT_DOMAIN),
            'BS' => __('Bahamas', self::TEXT_DOMAIN),
            'BH' => __('Bahrain', self::TEXT_DOMAIN),
            'BD' => __('Bangladesh', self::TEXT_DOMAIN),
            'BB' => __('Barbados', self::TEXT_DOMAIN),
            'BE' => __('Belgium', self::TEXT_DOMAIN),
            'BZ' => __('Belize', self::TEXT_DOMAIN),
            'BJ' => __('Benin', self::TEXT_DOMAIN),
            'BM' => __('Bermuda', self::TEXT_DOMAIN),
            'BT' => __('Bhutan', self::TEXT_DOMAIN),
            'BO' => __('Bolivia', self::TEXT_DOMAIN),
            'BA' => __('Bosnia and Herzegovina', self::TEXT_DOMAIN),
            'BW' => __('Botswana', self::TEXT_DOMAIN),
            'BV' => __('Bouvet Island', self::TEXT_DOMAIN),
            'BR' => __('Brazil', self::TEXT_DOMAIN),
            'IO' => __('British Indian Ocean Territory', self::TEXT_DOMAIN),
            'BN' => __('Brunei Darussalam', self::TEXT_DOMAIN),
            'BG' => __('Bulgaria', self::TEXT_DOMAIN),
            'BF' => __('Burkina Faso', self::TEXT_DOMAIN),
            'BI' => __('Burundi', self::TEXT_DOMAIN),
            'KH' => __('Cambodia', self::TEXT_DOMAIN),
            'CM' => __('Cameroon', self::TEXT_DOMAIN),
            'CA' => __('Canada', self::TEXT_DOMAIN),
            'CV' => __('Cape Verde', self::TEXT_DOMAIN),
            'KY' => __('Cayman Islands', self::TEXT_DOMAIN),
            'CF' => __('Central African Republic', self::TEXT_DOMAIN),
            'TD' => __('Chad', self::TEXT_DOMAIN),
            'CL' => __('Chile', self::TEXT_DOMAIN),
            'CX' => __('Christmas Island', self::TEXT_DOMAIN),
            'CC' => __('Cocos (Keeling) Islands', self::TEXT_DOMAIN),
            'CO' => __('Colombia', self::TEXT_DOMAIN),
            'KM' => __('Comoros', self::TEXT_DOMAIN),
            'CG' => __('Congo', self::TEXT_DOMAIN),
            'CD' => __('Congo, the Democratic Republic of the', self::TEXT_DOMAIN),
            'CK' => __('Cook Islands', self::TEXT_DOMAIN),
            'CR' => __('Costa Rica', self::TEXT_DOMAIN),
            'CI' => __('Cote D\'Ivoire', self::TEXT_DOMAIN),
            'HR' => __('Croatia', self::TEXT_DOMAIN),
            'CU' => __('Cuba', self::TEXT_DOMAIN),
            'CY' => __('Cyprus', self::TEXT_DOMAIN),
            'CZ' => __('Czech Republic', self::TEXT_DOMAIN),
            'DK' => __('Denmark', self::TEXT_DOMAIN),
            'DJ' => __('Djibouti', self::TEXT_DOMAIN),
            'DM' => __('Dominica', self::TEXT_DOMAIN),
            'DO' => __('Dominican Republic', self::TEXT_DOMAIN),
            'EC' => __('Ecuador', self::TEXT_DOMAIN),
            'EG' => __('Egypt', self::TEXT_DOMAIN),
            'SV' => __('El Salvador', self::TEXT_DOMAIN),
            'GQ' => __('Equatorial Guinea', self::TEXT_DOMAIN),
            'ER' => __('Eritrea', self::TEXT_DOMAIN),
            'EE' => __('Estonia', self::TEXT_DOMAIN),
            'ET' => __('Ethiopia', self::TEXT_DOMAIN),
            'FK' => __('Falkland Islands (Malvinas)', self::TEXT_DOMAIN),
            'FO' => __('Faroe Islands', self::TEXT_DOMAIN),
            'FJ' => __('Fiji', self::TEXT_DOMAIN),
            'FI' => __('Finland', self::TEXT_DOMAIN),
            'GF' => __('French Guiana', self::TEXT_DOMAIN),
            'PF' => __('French Polynesia', self::TEXT_DOMAIN),
            'TF' => __('French Southern Territories', self::TEXT_DOMAIN),
            'GA' => __('Gabon', self::TEXT_DOMAIN),
            'GM' => __('Gambia', self::TEXT_DOMAIN),
            'GE' => __('Georgia', self::TEXT_DOMAIN),
            'GH' => __('Ghana', self::TEXT_DOMAIN),
            'GI' => __('Gibraltar', self::TEXT_DOMAIN),
            'GR' => __('Greece', self::TEXT_DOMAIN),
            'GL' => __('Greenland', self::TEXT_DOMAIN),
            'GD' => __('Grenada', self::TEXT_DOMAIN),
            'GP' => __('Guadeloupe', self::TEXT_DOMAIN),
            'GU' => __('Guam', self::TEXT_DOMAIN),
            'GT' => __('Guatemala', self::TEXT_DOMAIN),
            'GN' => __('Guinea', self::TEXT_DOMAIN),
            'GW' => __('Guinea-Bissau', self::TEXT_DOMAIN),
            'GY' => __('Guyana', self::TEXT_DOMAIN),
            'HT' => __('Haiti', self::TEXT_DOMAIN),
            'HM' => __('Heard Island and McDonald Islands', self::TEXT_DOMAIN),
            'VA' => __('Holy See (Vatican City State)', self::TEXT_DOMAIN),
            'HN' => __('Honduras', self::TEXT_DOMAIN),
            'HK' => __('Hong Kong', self::TEXT_DOMAIN),
            'HU' => __('Hungary', self::TEXT_DOMAIN),
            'IS' => __('Iceland', self::TEXT_DOMAIN),
            'IN' => __('India', self::TEXT_DOMAIN),
            'ID' => __('Indonesia', self::TEXT_DOMAIN),
            'IR' => __('Iran, Islamic Republic of', self::TEXT_DOMAIN),
            'IQ' => __('Iraq', self::TEXT_DOMAIN),
            'IE' => __('Ireland', self::TEXT_DOMAIN),
            'IL' => __('Israel', self::TEXT_DOMAIN),
            'IT' => __('Italy', self::TEXT_DOMAIN),
            'JM' => __('Jamaica', self::TEXT_DOMAIN),
            'JP' => __('Japan', self::TEXT_DOMAIN),
            'JO' => __('Jordan', self::TEXT_DOMAIN),
            'KE' => __('Kenya', self::TEXT_DOMAIN),
            'KI' => __('Kiribati', self::TEXT_DOMAIN),
            'KW' => __('Kuwait', self::TEXT_DOMAIN),
            'KG' => __('Kyrgyzstan', self::TEXT_DOMAIN),
            'LA' => __('Lao People\'s Democratic Republic', self::TEXT_DOMAIN),
            'LV' => __('Latvia', self::TEXT_DOMAIN),
            'LB' => __('Lebanon', self::TEXT_DOMAIN),
            'LS' => __('Lesotho', self::TEXT_DOMAIN),
            'LR' => __('Liberia', self::TEXT_DOMAIN),
            'LY' => __('Libya', self::TEXT_DOMAIN),
            'LI' => __('Liechtenstein', self::TEXT_DOMAIN),
            'LT' => __('Lithuania', self::TEXT_DOMAIN),
            'LU' => __('Luxembourg', self::TEXT_DOMAIN),
            'MO' => __('Macao', self::TEXT_DOMAIN),
            'MG' => __('Madagascar', self::TEXT_DOMAIN),
            'MW' => __('Malawi', self::TEXT_DOMAIN),
            'MV' => __('Maldives', self::TEXT_DOMAIN),
            'ML' => __('Mali', self::TEXT_DOMAIN),
            'MT' => __('Malta', self::TEXT_DOMAIN),
            'MH' => __('Marshall Islands', self::TEXT_DOMAIN),
            'MQ' => __('Martinique', self::TEXT_DOMAIN),
            'MR' => __('Mauritania', self::TEXT_DOMAIN),
            'MU' => __('Mauritius', self::TEXT_DOMAIN),
            'YT' => __('Mayotte', self::TEXT_DOMAIN),
            'MX' => __('Mexico', self::TEXT_DOMAIN),
            'FM' => __('Micronesia, Federated States of', self::TEXT_DOMAIN),
            'MD' => __('Moldova, Republic of', self::TEXT_DOMAIN),
            'MC' => __('Monaco', self::TEXT_DOMAIN),
            'MN' => __('Mongolia', self::TEXT_DOMAIN),
            'MS' => __('Montserrat', self::TEXT_DOMAIN),
            'MA' => __('Morocco', self::TEXT_DOMAIN),
            'MZ' => __('Mozambique', self::TEXT_DOMAIN),
            'MM' => __('Myanmar', self::TEXT_DOMAIN),
            'NA' => __('Namibia', self::TEXT_DOMAIN),
            'NR' => __('Nauru', self::TEXT_DOMAIN),
            'NP' => __('Nepal', self::TEXT_DOMAIN),
            'NL' => __('Netherlands', self::TEXT_DOMAIN),
            'NC' => __('New Caledonia', self::TEXT_DOMAIN),
            'NZ' => __('New Zealand', self::TEXT_DOMAIN),
            'NI' => __('Nicaragua', self::TEXT_DOMAIN),
            'NE' => __('Niger', self::TEXT_DOMAIN),
            'NG' => __('Nigeria', self::TEXT_DOMAIN),
            'NU' => __('Niue', self::TEXT_DOMAIN),
            'NF' => __('Norfolk Island', self::TEXT_DOMAIN),
            'MK' => __('North Macedonia, Republic of', self::TEXT_DOMAIN),
            'MP' => __('Northern Mariana Islands', self::TEXT_DOMAIN),
            'NO' => __('Norway', self::TEXT_DOMAIN),
            'OM' => __('Oman', self::TEXT_DOMAIN),
            'PK' => __('Pakistan', self::TEXT_DOMAIN),
            'PW' => __('Palau', self::TEXT_DOMAIN),
            'PS' => __('Palestinian Territory, Occupied', self::TEXT_DOMAIN),
            'PA' => __('Panama', self::TEXT_DOMAIN),
            'PG' => __('Papua New Guinea', self::TEXT_DOMAIN),
            'PY' => __('Paraguay', self::TEXT_DOMAIN),
            'PE' => __('Peru', self::TEXT_DOMAIN),
            'PH' => __('Philippines', self::TEXT_DOMAIN),
            'PN' => __('Pitcairn', self::TEXT_DOMAIN),
            'PT' => __('Portugal', self::TEXT_DOMAIN),
            'PR' => __('Puerto Rico', self::TEXT_DOMAIN),
            'QA' => __('Qatar', self::TEXT_DOMAIN),
            'RE' => __('Reunion', self::TEXT_DOMAIN),
            'RO' => __('Romania', self::TEXT_DOMAIN),
            'RW' => __('Rwanda', self::TEXT_DOMAIN),
            'SH' => __('Saint Helena', self::TEXT_DOMAIN),
            'KN' => __('Saint Kitts and Nevis', self::TEXT_DOMAIN),
            'LC' => __('Saint Lucia', self::TEXT_DOMAIN),
            'PM' => __('Saint Pierre and Miquelon', self::TEXT_DOMAIN),
            'VC' => __('Saint Vincent and the Grenadines', self::TEXT_DOMAIN),
            'WS' => __('Samoa', self::TEXT_DOMAIN),
            'SM' => __('San Marino', self::TEXT_DOMAIN),
            'ST' => __('Sao Tome and Principe', self::TEXT_DOMAIN),
            'SA' => __('Saudi Arabia', self::TEXT_DOMAIN),
            'SN' => __('Senegal', self::TEXT_DOMAIN),
            'SC' => __('Seychelles', self::TEXT_DOMAIN),
            'SL' => __('Sierra Leone', self::TEXT_DOMAIN),
            'SG' => __('Singapore', self::TEXT_DOMAIN),
            'SK' => __('Slovakia', self::TEXT_DOMAIN),
            'SI' => __('Slovenia', self::TEXT_DOMAIN),
            'SB' => __('Solomon Islands', self::TEXT_DOMAIN),
            'SO' => __('Somalia', self::TEXT_DOMAIN),
            'ZA' => __('South Africa', self::TEXT_DOMAIN),
            'GS' => __('South Georgia and the South Sandwich Islands', self::TEXT_DOMAIN),
            'ES' => __('Spain', self::TEXT_DOMAIN),
            'LK' => __('Sri Lanka', self::TEXT_DOMAIN),
            'SD' => __('Sudan', self::TEXT_DOMAIN),
            'SR' => __('Suriname', self::TEXT_DOMAIN),
            'SJ' => __('Svalbard and Jan Mayen', self::TEXT_DOMAIN),
            'SZ' => __('Eswatini', self::TEXT_DOMAIN),
            'SE' => __('Sweden', self::TEXT_DOMAIN),
            'SY' => __('Syrian Arab Republic', self::TEXT_DOMAIN),
            'TJ' => __('Tajikistan', self::TEXT_DOMAIN),
            'TZ' => __('Tanzania, United Republic of', self::TEXT_DOMAIN),
            'TH' => __('Thailand', self::TEXT_DOMAIN),
            'TL' => __('Timor-Leste', self::TEXT_DOMAIN),
            'TG' => __('Togo', self::TEXT_DOMAIN),
            'TK' => __('Tokelau', self::TEXT_DOMAIN),
            'TO' => __('Tonga', self::TEXT_DOMAIN),
            'TT' => __('Trinidad and Tobago', self::TEXT_DOMAIN),
            'TN' => __('Tunisia', self::TEXT_DOMAIN),
            'TR' => __('Turkey', self::TEXT_DOMAIN),
            'TM' => __('Turkmenistan', self::TEXT_DOMAIN),
            'TC' => __('Turks and Caicos Islands', self::TEXT_DOMAIN),
            'TV' => __('Tuvalu', self::TEXT_DOMAIN),
            'UG' => __('Uganda', self::TEXT_DOMAIN),
            'AE' => __('United Arab Emirates', self::TEXT_DOMAIN),
            'UM' => __('United States Minor Outlying Islands', self::TEXT_DOMAIN),
            'UY' => __('Uruguay', self::TEXT_DOMAIN),
            'UZ' => __('Uzbekistan', self::TEXT_DOMAIN),
            'VU' => __('Vanuatu', self::TEXT_DOMAIN),
            'VE' => __('Venezuela', self::TEXT_DOMAIN),
            'VN' => __('Vietnam', self::TEXT_DOMAIN),
            'VG' => __('Virgin Islands, British', self::TEXT_DOMAIN),
            'VI' => __('Virgin Islands, U.S.', self::TEXT_DOMAIN),
            'WF' => __('Wallis and Futuna', self::TEXT_DOMAIN),
            'EH' => __('Western Sahara', self::TEXT_DOMAIN),
            'YE' => __('Yemen', self::TEXT_DOMAIN),
            'ZM' => __('Zambia', self::TEXT_DOMAIN),
            'ZW' => __('Zimbabwe', self::TEXT_DOMAIN),
            'AX' => __('Åland Islands', self::TEXT_DOMAIN),
            'BQ' => __('Bonaire, Sint Eustatius and Saba', self::TEXT_DOMAIN),
            'CW' => __('Curaçao', self::TEXT_DOMAIN),
            'GG' => __('Guernsey', self::TEXT_DOMAIN),
            'IM' => __('Isle of Man', self::TEXT_DOMAIN),
            'JE' => __('Jersey', self::TEXT_DOMAIN),
            'ME' => __('Montenegro', self::TEXT_DOMAIN),
            'BL' => __('Saint Barthélemy', self::TEXT_DOMAIN),
            'MF' => __('Saint Martin (French part)', self::TEXT_DOMAIN),
            'RS' => __('Serbia', self::TEXT_DOMAIN),
            'SX' => __('Sint Maarten (Dutch part)', self::TEXT_DOMAIN),
            'SS' => __('South Sudan', self::TEXT_DOMAIN),
            'XK' => __('Kosovo', self::TEXT_DOMAIN),
        ];
    }
}