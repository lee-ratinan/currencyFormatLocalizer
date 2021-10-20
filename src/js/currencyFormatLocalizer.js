/**
 * Author Nat Lee (c) 2021
 * Free to use
 * https://github.com/lee-ratinan/currencyFormatLocalizer
 */
(function ($) {
    $.fn.currencyFormatLocalizer = function (options) {
        let currencies = {
            // ASEAN
            'BND': {
                'default_language': 'MS',
                'currency': 'Brunei dollar',
                'countries': ['BN'],
                'language': {
                    'MS': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': 'B$###'
                    }
                }
            },
            'IDR': {
                'default_language': 'ID',
                'currency': 'Indonesian rupiah',
                'countries': ['ID'],
                'language': {
                    'ID': {
                        'ts': '.',
                        'dp': ',',
                        'c': 0,
                        'f': 'Rp###'
                    }
                }
            },
            'KHR': {
                'default_language': 'KM',
                'currency': 'Cambodian riel',
                'countries': ['KH'],
                'language': {
                    'KM': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###៛'
                    }
                }
            },
            'LAK': {
                'default_language': 'LO',
                'currency': 'Lao kip',
                'countries': ['LA'],
                'language': {
                    'LO': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '₭###'
                    }
                }
            },
            'MMK': {
                'default_language': 'MY',
                'currency': 'Myanmar kyat',
                'countries': ['MM'],
                'language': {
                    'MY': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': 'K###'
                    }
                }
            },
            'MYR': {
                'default_language': 'MS',
                'currency': 'Malaysian ringgit',
                'countries': ['MY'],
                'language': {
                    'MS': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '<small>RM</small>###'
                    }
                }
            },
            'PHP': {
                'default_language': 'EN',
                'currency': 'Philippine peso',
                'countries': ['PH'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '₱###'
                    }
                }
            },
            'SGD': {
                'default_language': 'EN',
                'currency': 'Singapore dollar',
                'countries': ['SG'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': 'S$###'
                    },
                    'ZH': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###元'
                    }
                }
            },
            'THB': {
                'default_language': 'EN',
                'currency': 'Thai baht',
                'countries': ['TH'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###฿'
                    },
                    'TH': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###บ.'
                    }
                }
            },
            'VND': {
                'default_language': 'VI',
                'currency': 'Vietnamese đồng',
                'countries': ['VN'],
                'language': {
                    'VI': {
                        'ts': '.',
                        'dp': ',',
                        'c': 0,
                        'f': '###₫'
                    }
                }
            },
            // EAST ASIA
            'CNY': {
                'default_language': 'ZH',
                'currency': 'Renminbi',
                'countries': ['CN'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '¥###'
                    },
                    'ZH': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###元'
                    }
                }
            },
            'HKD': {
                'default_language': 'EN',
                'currency': 'Hong Kong dollar',
                'countries': ['HK'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': 'HK$###'
                    },
                    'ZH': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###元'
                    }
                }
            },
            'JPY': {
                'default_language': 'JA',
                'currency': 'Japanese yen',
                'countries': ['JP'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 0,
                        'f': '¥###'
                    },
                    'JA': {
                        'ts': ',',
                        'dp': '.',
                        'c': 0,
                        'f': '###円'
                    }
                }
            },
            'KRW': {
                'default_language': 'KO',
                'currency': 'Korean won',
                'countries': ['KR'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 0,
                        'f': '₩###'
                    },
                    'KO': {
                        'ts': ',',
                        'dp': '.',
                        'c': 0,
                        'f': '###원'
                    }
                }
            },
            'TWD': {
                'default_language': 'ZH',
                'currency': 'New Taiwan dollar',
                'countries': ['TW'],
                'language': {
                    'EN': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': 'NT$###'
                    },
                    'ZH': {
                        'ts': ',',
                        'dp': '.',
                        'c': 2,
                        'f': '###元'
                    }
                }
            },
            // SOUTH ASIA
            'INR': {},
            // MIDDLE EAST
            // EUROPE
            'CHF': {
                'default_language': 'EN',
                'currency': 'Swiss franc',
                'countries': ['CH'],
                'language': {
                    'EN': {
                        'ts': "’",
                        'dp': '.',
                        'c': 2,
                        'f': 'fr.###'
                    }
                }
            },
            'EUR': {
                'default_language': 'DE',
                'currency': 'Euro',
                'countries': ['PT', 'ES', 'FR', 'DE', 'IT'],
                'language': {
                    'DE': {
                        'ts': ".",
                        'dp': ',',
                        'c': 2,
                        'f': '£###'
                    },
                    'FR': {
                        'ts': " ",
                        'dp': ',',
                        'c': 2,
                        'f': '£###'
                    }
                }
            },
            'GBP': {
                'default_language': 'EN',
                'currency': 'Pound sterling',
                'countries': ['GB'],
                'language': {
                    'EN': {
                        'ts': ",",
                        'dp': '.',
                        'c': 2,
                        'f': '£###'
                    }
                }
            },
            // NORTH AMERICA
            'CAD': {
                'default_language': 'EN',
                'currency': 'Canadian dollar',
                'countries': ['CA'],
                'language': {
                    'EN': {
                        'ts': ",",
                        'dp': '.',
                        'c': 2,
                        'f': 'C$###'
                    },
                    'FR': {
                        'ts': " ",
                        'dp': ',',
                        'c': 2,
                        'f': 'C$###'
                    }
                }
            },
            'USD': {
                'default_language': 'EN',
                'currency': 'United States dollar',
                'countries': ['US'],
                'language': {
                    'EN': {
                        'ts': ",",
                        'dp': '.',
                        'c': 2,
                        'f': '$###'
                    }
                }
            },
            // SOUTH AMERICA
            // OCEANIA
            'AUD': {
                'default_language': 'EN',
                'currency': 'Australian dollar',
                'countries': ['AU'],
                'language': {
                    'EN': {
                        'ts': ",",
                        'dp': '.',
                        'c': 2,
                        'f': 'A$###'
                    }
                }
            },
            'NZD': {
                'default_language': 'EN',
                'currency': 'New Zealand dollar',
                'countries': ['NZ'],
                'language': {
                    'EN': {
                        'ts': ",",
                        'dp': '.',
                        'c': 2,
                        'f': 'NZ$###'
                    }
                }
            },
        };
        let settings = $.extend({
            currency_code: 'USD',
            language: 'EN',
            amount: null
        }, options);
        return this.each(function () {
            
            // if (isNaN(date_object.getTime()) || date_string !== date('Y-m-d', date_object.getTime() / 1000)) {
            //     $(this).html(error_messages['E001']);
            // } else {
            //     formatDate($(this), calendar_code, locale_code, format_code, date_object);
            // }
        });
    };
}(jQuery));






