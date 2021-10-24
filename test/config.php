<?php
$config = $currency->get_config();
ksort($config);
?>
<h1>Config</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ISO4217</th>
      <th>Currency</th>
      <th>Default Language</th>
      <th>Language</th>
      <th>Thousand Sep</th>
      <th>Dec Pt</th>
      <th>Dec</th>
      <th>Template</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($config as $currency => $data) : ?>
          <?php foreach ($data['language'] as $language => $config) : ?>
          <tr>
            <td><?= $currency ?></td>
            <td><?= $data['currency'] ?></td>
            <td><?= $data['default_language'] ?></td>
            <td><?= $language ?></td>
            <td><?= $config['ts'] ?></td>
            <td><?= $config['dp'] ?></td>
            <td><?= $config['c'] ?></td>
            <td><?= $config['f'] ?></td>
          </tr>
          <?php endforeach; ?>
      <?php endforeach; ?>
  </tbody>
</table>