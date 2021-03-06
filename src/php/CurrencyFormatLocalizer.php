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
            'currency' => 'Indonesian rupiah',
            'language' => [
                'ID' => [
                    'ts' => '.',
                    'dp' => ',',
                    'c' => 0,
                    'f' => 'Rp###'
                ]
            ]
        ],
        'KHR' => [
            'default_language' => 'KM',
            'currency' => 'Cambodian riel',
            'language' => [
                'KM' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###៛'
                ]
            ]
        ],
        'LAK' => [
            'default_language' => 'LO',
            'currency' => 'Lao kip',
            'language' => [
                'LO' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '₭###'
                ]
            ]
        ],
        'MMK' => [
            'default_language' => 'MY',
            'currency' => 'Myanmar kyat',
            'language' => [
                'MY' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'K###'
                ]
            ]
        ],
        'MYR' => [
            'default_language' => 'MS',
            'currency' => 'Malaysian ringgit',
            'language' => [
                'MS' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '<small>RM</small>###'
                ]
            ]
        ],
        'PHP' => [
            'default_language' => 'EN',
            'currency' => 'Philippine peso',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '₱###'
                ]
            ]
        ],
        'SGD' => [
            'default_language' => 'EN',
            'currency' => 'Singapore dollar',
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
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###฿'
                ],
                'TH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###บ.'
                ]
            ]
        ],
        'VND' => [
            'default_language' => 'VI',
            'currency' => 'Vietnamese đồng',
            'language' => [
                'VI' => [
                    'ts' => '.',
                    'dp' => ',',
                    'c' => 0,
                    'f' => '###₫'
                ]
            ]
        ],
        // EAST ASIA
        'CNY' => [
            'default_language' => 'ZH',
            'currency' => 'Renminbi',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '¥###'
                ],
                'ZH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###元'
                ]
            ]
        ],
        'HKD' => [
            'default_language' => 'EN',
            'currency' => 'Hong Kong dollar',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'HK$###'
                ],
                'ZH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###元'
                ]
            ]
        ],
        'JPY' => [
            'default_language' => 'JA',
            'currency' => 'Japanese yen',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 0,
                    'f' => '¥###'
                ],
                'JA' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 0,
                    'f' => '###円'
                ]
            ]
        ],
        'KRW' => [
            'default_language' => 'KO',
            'currency' => 'Korean won',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 0,
                    'f' => '₩###'
                ],
                'KO' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 0,
                    'f' => '###원'
                ]
            ]
        ],
        'TWD' => [
            'default_language' => 'ZH',
            'currency' => 'New Taiwan dollar',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'NT$###'
                ],
                'ZH' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###元'
                ]
            ]
        ],
        // SOUTH ASIA
        'BDT' => [
            'default_language' => 'EN',
            'currency' => 'Bangladeshi taka',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '৳###'
                ]
            ]
        ],
        'INR' => [
            'default_language' => 'EN',
            'currency' => 'Indian rupee',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '₹###'
                ]
            ]
        ],
        'LKR' => [
            'default_language' => 'EN',
            'currency' => 'Sri Lankan rupee',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '₨ ###'
                ],
                'SI' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'රු ###'
                ],
                'TA' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'ரூ ###'
                ]
            ]
        ],
        'MVR' => [
            'default_language' => 'EN',
            'currency' => 'Maldivian rufiyaa',
            'language' => [
                'EN' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'Rf ###'
                ],
                'DV' => [
                    'ts' => ',',
                    'dp' => '.',
                    'c' => 2,
                    'f' => '###ރ.'
                ]
            ]
        ],
        // MIDDLE EAST
        // EUROPE
        'CHF' => [
            'default_language' => 'EN',
            'currency' => 'Swiss franc',
            'language' => [
                'EN' => [
                    'ts' => "’",
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'fr.###'
                ]
            ]
        ],
        'EUR' => [
            'default_language' => 'DE',
            'currency' => 'Euro',
            'language' => [
                'DE' => [
                    'ts' => ".",
                    'dp' => ',',
                    'c' => 2,
                    'f' => '£###'
                ],
                'FR' => [
                    'ts' => " ",
                    'dp' => ',',
                    'c' => 2,
                    'f' => '£###'
                ]
            ]
        ],
        'GBP' => [
            'default_language' => 'EN',
            'currency' => 'Pound sterling',
            'language' => [
                'EN' => [
                    'ts' => ",",
                    'dp' => '.',
                    'c' => 2,
                    'f' => '£###'
                ]
            ]
        ],
        // NORTH AMERICA
        'CAD' => [
            'default_language' => 'EN',
            'currency' => 'Canadian dollar',
            'language' => [
                'EN' => [
                    'ts' => ",",
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'C$###'
                ],
                'FR' => [
                    'ts' => " ",
                    'dp' => ',',
                    'c' => 2,
                    'f' => 'C$###'
                ]
            ]
        ],
        'USD' => [
            'default_language' => 'EN',
            'currency' => 'United States dollar',
            'language' => [
                'EN' => [
                    'ts' => ",",
                    'dp' => '.',
                    'c' => 2,
                    'f' => '$###'
                ]
            ]
        ],
        // SOUTH AMERICA
        // OCEANIA
        'AUD' => [
            'default_language' => 'EN',
            'currency' => 'Australian dollar',
            'language' => [
                'EN' => [
                    'ts' => ",",
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'A$###'
                ]
            ]
        ],
        'NZD' => [
            'default_language' => 'EN',
            'currency' => 'New Zealand dollar',
            'language' => [
                'EN' => [
                    'ts' => ",",
                    'dp' => '.',
                    'c' => 2,
                    'f' => 'NZ$###'
                ]
            ]
        ],
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
                $prefix = '';
                if (0 > $amount)
                {
                    $amount = abs($amount);
                    $prefix = '- ';
                }
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
                return $prefix . str_replace(self::STR_PLACEHOLDER, number_format($amount, $decimals, $decimal_point, $thousand_sep), $string);
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

    /**
     * Return the config
     * @return array[]
     */
    public function get_config()
    {
        return $this->currencies;
    }
}