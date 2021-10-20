<?php
include_once '../src/php/CurrencyFormatLocalizer.php';
$amount = $_POST['amount'];
$currency = new CurrencyFormatLocalizer();
$config = $currency->get_config();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="dateFormatLocalizer">
    <meta name="author" content="Ratinan Lee">
    <title>Test dateFormatLocalizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
      <?php
      include "_header.php";
      ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col col-lg-8">
          <h1>Config</h1>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Currency</th>
                <th>Default Language</th>
                <th>Countries</th>
                <th>Language</th>
                <th>Thousand Sep</th>
                <th>Dec Pt</th>
                <th>Dec</th>
                <th>Template</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($config as $currency => $data) : ?>
                    <?php $count = 0; ?>
                    <?php foreach ($data['language'] as $language => $config) : ?>
                    <tr>
                        <?php if (0 == $count) : ?>
                            <?php $row_span = count($data['language']); ?>
                          <td rowspan="<?= $row_span ?>"><?= $currency . ': ' . $data['currency'] ?></td>
                          <td rowspan="<?= $row_span ?>"><?= $data['default_language'] ?></td>
                          <td rowspan="<?= $row_span ?>"><?= implode(', ', $data['countries']) ?></td>
                        <?php endif; ?>
                      <td><?= $language ?></td>
                      <td><?= $config['ts'] ?></td>
                      <td><?= $config['dp'] ?></td>
                      <td><?= $config['c'] ?></td>
                      <td><?= $config['f'] ?></td>
                        <?php $count++; ?>
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
</html>