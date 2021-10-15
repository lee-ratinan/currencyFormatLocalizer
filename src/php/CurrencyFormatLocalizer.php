<?php

/**
 * Class CurrencyFormatLocalizer
 */
class CurrencyFormatLocalizer {

    // https://www.thefinancials.com/Default.aspx?SubSectionID=curformat
    // https://fastspring.com/blog/how-to-format-30-currencies-from-countries-all-over-the-world/
    // https://www.dfa.cornell.edu/treasurer/cash-management/processinginternational/intl-currency

    const LANGUAGE_ISO = 'ISO';
    const STR_SPACE = ' ';
    const STR_DOT = '.';
    const STR_COMMA = ',';
    const STR_PLACEHOLDER = '###';
    const INT_TWO = 2;
    const KEY_DEFAULT_LANGUAGE = 'default_language';
    const KEY_LANGUAGE = 'language';
    const KEY_THOUSAND_SEP = 'ts';
    const KEY_DECIMAL_POINT = 'dp';
    const KEY_DECIMALS = 'c';
    const KEY_FORMAT_STRING = 'f';
    const ERROR_CURRENCY_NOT_SUPPORTED = '[CURRENCY NOT SUPPORTED]';
    const ERROR_INVALID_AMOUNT = '[INVALID AMOUNT]';

    private $currencies = [
        // ASEAN
        'BND' => [
            'default_language' => 'MS',
            'currency' => 'Brunei dollar',
            'countries' => ['BN'],
            'language' => [
                'MS' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'B$###'
                ]
            ]
        ],
        'IDR' => [
            'default_language' => 'ID',
            'currency' => 'Indonesian Rupiah',
            'countries' => ['ID'],
            'language' => [
                'ID' => [
                    'ts' => '.',
                    'dp' => ',',
                    'c' => 0,
                    'f' => 'Rp###'
                ]
            ]
        ],
        'KH' => [],
        'LAK' => [],
        'MM' => [],
        'MYR' => [
            'default_language' => 'MS',
            'currency' => 'Malaysia Ringgit',
            'countries' => ['MY'],
            'language' => [
                'MS' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '<small>RM</small>###'
                ]
            ]
        ],
        'PHP' => [],
        'SGD' => [
            'default_language' => 'EN',
            'currency' => 'Singapore dollar',
            'countries' => ['SG'],
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'S$###'
                ],
                'ZH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###元'
                ]
            ]
        ],
        'THB' => [
            'default_language' => 'EN',
            'currency' => 'Thai baht',
            'countries' => ['TH'],
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '฿###'
                ],
                'TH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###บ.'
                ]
            ]
        ],
        'VND' => [],
        // EAST ASIA
        'CNY' => [],
        'JPY' => [],
        'KRW' => [],
        'TWD' => [],
        // SOUTH ASIA
        'INR' => [],
        // MIDDLE EAST
        // EUROPE
        'EUR' => [],
        'GBP' => [],
        // NORTH AMERICA
        'CAD' => [],
        'USD' => [],
        // SOUTH AMERICA
        // OCEANIA
        'AUD' => [],
        'NZD' => [],
    ];

    /**
     * Format currency
     * @param string $currency_code Currency code (ISO4217 3-letter code)
     * @param string $language Language code (ISO639 2-letter code) or ISO to format the number with ISO currency code
     * @param float|integer $amount Amount to be formatted
     * @return string Formatted currency string or error message
     */
    public function format($currency_code, $language, $amount)
    {
        $currency_code = strtoupper(($currency_code));
        $language = strtoupper(($language));
        if (is_float($amount) || is_integer($amount))
        {
            if (isset($this->currencies[$currency_code]))
            {
                if (self::LANGUAGE_ISO == $language)
                {
                    return $currency_code . self::STR_SPACE . number_format($amount, self::INT_TWO, self::STR_DOT, self::STR_COMMA);
                }
                $currency = $this->currencies[$currency_code];
                if ( ! isset($currency[self::KEY_LANGUAGE][$language]))
                {
                    $language = $currency[self::KEY_DEFAULT_LANGUAGE];
                }
                $format = $currency[self::KEY_LANGUAGE][$language];
                $thousand_sep = $format[self::KEY_THOUSAND_SEP];
                $decimal_point = $format[self::KEY_DECIMAL_POINT];
                $decimals = $format[self::KEY_DECIMALS];
                $string = $format[self::KEY_FORMAT_STRING];
                return str_replace(self::STR_PLACEHOLDER, number_format($amount, $decimals, $decimal_point, $thousand_sep), $string);
            } else
            {
                return self::ERROR_CURRENCY_NOT_SUPPORTED;
            }
        } else
        {
            return self::ERROR_INVALID_AMOUNT;
        }
    }

    /**
     * Retrieve supported currencies and languages
     * @return array
     */
    public function get_currencies_with_languages()
    {
        $list = [];
        foreach ($this->currencies as $currency_code => $data)
        {
            foreach ($data[self::KEY_LANGUAGE] as $language => $values)
            {
                $list[$currency_code][] = $language;
            }
        }
        return $list;
    }
}