# currencyFormatLocalizer

[![GitHub last commit](https://img.shields.io/github/last-commit/lee-ratinan/currencyFormatLocalizer)](https://github.com/lee-ratinan/currencyFormatLocalizer/commits/main)
[![GitHub](https://img.shields.io/github/license/lee-ratinan/currencyFormatLocalizer)](https://github.com/lee-ratinan/currencyFormatLocalizer/blob/main/LICENSE)
[![GitHub all releases](https://img.shields.io/github/downloads/lee-ratinan/currencyFormatLocalizer/total)](https://github.com/lee-ratinan/currencyFormatLocalizer/releases)
[![GitHub issues](https://img.shields.io/github/issues/lee-ratinan/currencyFormatLocalizer)](https://github.com/lee-ratinan/currencyFormatLocalizer/issues)

This JS/PHP library formats currency into localized formats

## How to Use

### PHP

#### `format()`

By just constructing `CurrencyFormatLocalizer()`, you can simply call `format()` to render the currency in the localized locale that you or your user desire.

##### Parameters

  * $currency_code - ISO4217 currency code
  * $language - ISO639 2-digit language code
  * $amount - The amount of money to be formatted in floating-point number or integer

##### Example

```PHP
$currency = new CurrencyFormatLocalizer();
/*
 * This will return the formatted 3999 in JPY in Japanese
 * Output: 3,999円
 */
echo $currency->format('JPY', 'JA', 3999);
```

##### Errors

The library will handle the errors differently.
  * If the currency is not supported: it will return an error message: `[CURRENCY NOT SUPPORTED]`.
  * If the amount is not an integer or floating-point number: it will return an error message: `[INVALID AMOUNT]`.
  * If the language code is not supported: it will replace the language code by default language of the currency.

### JavaScript

This is the jQuery plugin, so jQuery JS has to be included into the HTML file first. Then, include the CurrencyFormatLocalizer.js or the minified CurrencyFormatLocalizer.min.js.

#### Example

```HTML
<span class="currency" data-currency="TWD" data-language="ZH" data-amount="1234.56"></span>
```

```JavaScript
$(function () {
  $('.currency').CurrencyFormatLocalizer();
});
```

The above code will generate `1,234.56元`.

#### Errors

The library will handle the errors differently.
  * If the currency is not supported: it will return an error message: `[CURRENCY NOT SUPPORTED]`.
  * If the amount is not an integer or floating-point number: it will return an error message: `[INVALID AMOUNT]`.
  * If the language code is not supported: it will replace the language code by default language of the currency.

### Config

Currently, the library supports the following currencies and locales:

| Currency | Locales |
|----------|---------|
| BND | MS           |
| IDR | ID           |
| KHR | KM           |
| LAK | LO           |
| MMK | MY           |
| MYR | MS           |
| PHP | EN           |
| SGD | EN, ZH       |
| THB | EN, TH       |
| VND | VI           |
| CNY | ZH, EN       |
| HKD | EN, ZH       |
| JPY | JA, EN       |
| KRW | KO, EN       |
| TWD | ZH, EN       |
| CHF | EN           |
| EUR | DE, FR       |
| GBP | EN           |
| CAD | EN, FR       |
| USD | EN           |
| AUD | EN           |
| NZD | EN           |