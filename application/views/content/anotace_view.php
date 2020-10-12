<div class="container obsah">
  <table class="table">
  <?php foreach($anotace_view as $informace): ?>
  <thead>
    <tr>
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
      <th scope="col">Anotace</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo $informace->nazev_knihy;?></td>
        <td><?php echo $informace->autor; ?></td>
        <td><?php echo $informace->anotace; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
 </table>
</div>