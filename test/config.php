<?php
$config = $currency->get_config();
?>
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