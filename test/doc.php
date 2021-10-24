<h1>currencyFormatLocalizer</h1>
<p>This JS/PHP library formats currency into localized formats</p>
<h2>How to Use</h2>

<h3>PHP</h3>
<h4><code>format()</code></h4>
<p>By just constructing <code>CurrencyFormatLocalizer()</code>, you can simply call <code>format()</code> to render the
  currency in the localized locale that you or your user desire.</p>
<h5>Parameters</h5>
<ul>
  <li><code>$currency_code</code> - ISO4217 currency code</li>
  <li><code>$language</code> - ISO639 2-digit language code</li>
  <li><code>$amount</code> - The amount of money to be formatted in floating-point number or integer</li>
</ul>
<h5>Example</h5>
<code><pre>
$currency = new CurrencyFormatLocalizer();
/*
 * This will return the formatted 3999 in JPY in Japanese
 * Output: 3,999円
 */
echo $currency->format('JPY', 'JA', 3999);
</pre>
</code>
<h5>Errors</h5>
<p>The library will handle the errors differently.</p>
<ul>
  <li>If the currency is not supported: it will return an error message: <code>[CURRENCY NOT SUPPORTED]</code>.</li>
  <li>If the amount is not an integer or floating-point number: it will return an error message: <code>[INVALID
      AMOUNT]</code>.
  </li>
  <li>If the language code is not supported: it will replace the language code by default language of the currency.</li>
</ul>

<h3>JavaScript</h3>
<p>This is the jQuery plugin, so jQuery JS has to be included into the HTML file first. Then, include the
  CurrencyFormatLocalizer.js or the minified CurrencyFormatLocalizer.min.js.</p>
<h4>Example</h4>
<code><pre>
&lt;span class="currency" data-currency="TWD" data-language="ZH" data-amount="1234.56"&gt;&lt;/span&gt;
&lt;script&gt;
$(function () {
  $('.currency').CurrencyFormatLocalizer();
});
&lt;/script&gt;
</pre>
</code>
<p>The above code will generate `1,234.56元`.</p>
<h4>Errors</h4>
<p>The library will handle the errors differently.</p>
<ul>
  <li>If the currency is not supported: it will return an error message: <code>[CURRENCY NOT SUPPORTED]</code>.</li>
  <li>If the amount is not an integer or floating-point number: it will return an error message: <code>[INVALID
      AMOUNT]</code>.
  </li>
  <li>If the language code is not supported: it will replace the language code by default language of the currency.</li>
</ul>

<h3>Config</h3>
<p>Currently, the library supports the following currencies and languages:</p>
<?php
$config = $currency->get_config();
ksort($config);
$currencies = [];
foreach ($config as $currency => $data)
{
    $currencies[$currency]['currency'] = $data['currency'];
    $currencies[$currency]['default_language'] = $data['default_language'];
    foreach ($data['language'] as $language => $config)
    {
      $currencies[$currency]['languages'][] = $language;
    }
}
?>
<table class="table table-sm table-hover table-striped">
  <thead>
    <tr>
      <th>ISO4217</th>
      <th>Currency</th>
      <th>Default Language</th>
      <th>Language</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($currencies as $code => $data) : ?>
    <tr>
      <td><?= $code ?></td>
      <td><?= $data['currency'] ?></td>
      <td><?= $data['default_language'] ?></td>
      <td><?= implode(', ', $data['languages']) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>