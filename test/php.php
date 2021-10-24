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
            <td><?= $currency->format($cc, $lg, $amount) ?></td>
          </tr>
          <?php endforeach; ?>
      <?php endforeach; ?>
  </tbody>
</table>