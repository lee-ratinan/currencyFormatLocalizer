<?php
include_once '../src/php/CurrencyFormatLocalizer.php';
$amount = $_POST['amount'];
$currency = new CurrencyFormatLocalizer();
if (empty($amount))
{
    $amount = 9876543.21;
}
$amount = floatval($amount);
$supported_locales = $currency->get_currencies_with_languages();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="dateFormatLocalizer">
    <meta name="author" content="Ratinan Lee">
    <title>Test currencyFormatLocalizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../src/js/currencyFormatLocalizer.js"></script>
  </head>
  <body>
      <?php
      include "_header.php";
      ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col col-lg-8">
          <h1>Test JavaScript Formatter</h1>
          <form method="POST">
            <label for="amount">Amount</label>
            <input class="form-control mb-3" type="text" name="amount" id="amount" value="<?= @$amount ?>"
                   placeholder="Amount" required/>
            <div class="text-end">
              <input class="btn btn-success mb-3" type="submit" value="Format"/>
            </div>
          </form>
          <h1>Results</h1>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Currency</th>
                <th>Language</th>
                <th>Format</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($supported_locales as $cc => $lgs) : ?>
                    <?php foreach ($lgs as $lg) : ?>
                    <tr>
                      <td><?= $cc ?></td>
                      <td><?= $lg ?></td>
                      <td><span class="test-currency" data-currency="<?= $cc ?>" data-language="<?= $lg ?>" data-amount="<?= $amount ?>"></span></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
          </table>
          <p>&copy; Ratinan Lee - 2021</p>
        </div>
      </div>
    </div>
  </body>
  <script>
      $(function () {
          $('.test-currency').currencyFormatLocalizer();
      });
  </script>
</html>