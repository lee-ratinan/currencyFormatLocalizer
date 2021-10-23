/**
 * Author Nat Lee (c) 2021
 * Free to use
 * https://github.com/lee-ratinan/currencyFormatLocalizer
 */
(function ($) {
    $.fn.CurrencyFormatLocalizer = function (options) {
        let currencies = {
            // ASEAN
            'BND': {
                'default_language': 'MS',
                'currency': 'Brunei dollar',
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
            // MIDDLE EAST
            // EUROPE
            'CHF': {
                'default_language': 'EN',
                'currency': 'Swiss franc',
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
        let error_messages = {
            'E001': '[INVALID AMOUNT]',
            'E002': '[CURRENCY NOT SUPPORTED]'
        };
        let settings = $.extend({
            currency_code: '',
            language: ''
        }, options);
        let number_format = function (number, decimals, decPoint, thousandsSep) {
            // eslint-disable-line camelcase
            //  discuss at: https://locutus.io/php/number_format/
            // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
            // improved by: Kevin van Zonneveld (https://kvz.io)
            // improved by: davook
            // improved by: Brett Zamir (https://brett-zamir.me)
            // improved by: Brett Zamir (https://brett-zamir.me)
            // improved by: Theriault (https://github.com/Theriault)
            // improved by: Kevin van Zonneveld (https://kvz.io)
            // bugfixed by: Michael White (https://getsprink.com)
            // bugfixed by: Benjamin Lupton
            // bugfixed by: Allan Jensen (https://www.winternet.no)
            // bugfixed by: Howard Yeend
            // bugfixed by: Diogo Resende
            // bugfixed by: Rival
            // bugfixed by: Brett Zamir (https://brett-zamir.me)
            //  revised by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
            //  revised by: Luke Smith (https://lucassmith.name)
            //    input by: Kheang Hok Chin (https://www.distantia.ca/)
            //    input by: Jay Klehr
            //    input by: Amir Habibi (https://www.residence-mixte.com/)
            //    input by: Amirouche
            //   example 1: number_format(1234.56)
            //   returns 1: '1,235'
            //   example 2: number_format(1234.56, 2, ',', ' ')
            //   returns 2: '1 234,56'
            //   example 3: number_format(1234.5678, 2, '.', '')
            //   returns 3: '1234.57'
            //   example 4: number_format(67, 2, ',', '.')
            //   returns 4: '67,00'
            //   example 5: number_format(1000)
            //   returns 5: '1,000'
            //   example 6: number_format(67.311, 2)
            //   returns 6: '67.31'
            //   example 7: number_format(1000.55, 1)
            //   returns 7: '1,000.6'
            //   example 8: number_format(67000, 5, ',', '.')
            //   returns 8: '67.000,00000'
            //   example 9: number_format(0.9, 0)
            //   returns 9: '1'
            //  example 10: number_format('1.20', 2)
            //  returns 10: '1.20'
            //  example 11: number_format('1.20', 4)
            //  returns 11: '1.2000'
            //  example 12: number_format('1.2000', 3)
            //  returns 12: '1.200'
            //  example 13: number_format('1 000,50', 2, '.', ' ')
            //  returns 13: '100 050.00'
            //  example 14: number_format(1e-8, 8, '.', '')
            //  returns 14: '0.00000001'

            number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
            const n = !isFinite(+number) ? 0 : +number
            const prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
            const sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
            const dec = (typeof decPoint === 'undefined') ? '.' : decPoint
            let s = ''

            const toFixedFix = function (n, prec) {
                if (('' + n).indexOf('e') === -1) {
                    return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
                } else {
                    const arr = ('' + n).split('e')
                    let sig = ''
                    if (+arr[1] + prec > 0) {
                        sig = '+'
                    }
                    return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
                }
            }

            s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || ''
                s[1] += new Array(prec - s[1].length + 1).join('0')
            }

            return s.join(dec)
        }
        return this.each(function () {
            let currency = $(this).attr('data-currency') || settings.currency_code,
                language = $(this).attr('data-language') || settings.language,
                amount = $(this).attr('data-amount');
            if (!isNaN(amount) && !isNaN(parseFloat(amount))) {
                if (undefined !== currencies[currency]) {
                    let prefix = '';
                    amount = parseFloat(amount);
                    if (0 > amount) {
                        amount = Math.abs(amount);
                        prefix = '- ';
                    }
                    if ('ISO' === language) {
                        $(this).html(currency + ' ' + number_format(amount, 2, '.', ','));
                    }
                    if (undefined === currencies[currency]['language'][language]) {
                        language = currencies[currency].default_language;
                    }
                    let config = currencies[currency]['language'][language],
                        format = config.f,
                        str_amount = number_format(amount, config.c, config.dp, config.ts);
                    $(this).html(prefix + format.replace('###', str_amount));
                } else {
                    $(this).html(error_messages['E002']);
                }
            } else {
                $(this).html(error_messages['E001']);
            }
        });
    };
}(jQuery));