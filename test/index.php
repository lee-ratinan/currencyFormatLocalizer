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
$page = $_GET['mode'];
if (empty($page))
{
    $page = 'php';
}
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
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <b style="font-size:1.5em">CurrencyFormatLocalizer</b>
        </div>
      </div>
    </header>
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <a href="https://github.com/lee-ratinan/currencyFormatLocalizer" class="btn btn-warning mb-2" target="_blank">
            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" style="height:1em;width:1em;">
              <path fill="currentColor"
                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                    class=""></path>
            </svg>
            GitHub Page
          </a>
          <a href="https://lee-ratinan.github.io" class="btn btn-warning mb-2" target="_blank">Github.io</a>
          <a class="btn btn-outline-secondary mb-2" href="?mode=php">PHP</a>
          <a class="btn btn-outline-secondary mb-2" href="?mode=javascript">JavaScript</a>
          <a class="btn btn-outline-secondary mb-2" href="?mode=config">Config</a>
          <a class="btn btn-outline-secondary mb-2" href="?mode=doc">Doc</a>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col col-lg-8">
            <?php if (in_array($page, ['php', 'javascript'])) : ?>
              <h1>Test <?= strtoupper($page) ?> Formatter</h1>
              <form method="POST">
                <label for="amount">Amount</label>
                <input class="form-control mb-3" type="text" name="amount" id="amount" value="<?= @$amount ?>"
                       placeholder="Amount" required/>
                <div class="text-end">
                  <input class="btn btn-success mb-3" type="submit" value="Format"/>
                </div>
              </form>
              <h1>Results</h1>
            <?php endif; ?>
            <?php include_once($page . '.php'); ?>
          <p>&copy; Ratinan Lee - 2021</p>
        </div>
      </div>
    </div>
  </body>
  <script>
      $(function () {
          let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
          if (matched) {
              $('body').addClass('bg-dark text-white');
              $('.btn-outline-secondary').removeClass('btn-outline-secondary').addClass('btn-outline-light');
              $('table').addClass('text-white').removeClass('table-striped table-hover');
          }
      });
  </script>
</html>