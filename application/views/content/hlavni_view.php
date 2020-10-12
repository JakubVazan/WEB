<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($knihy as $k): ?>
      <tr>
            <td>
              <a href="<?php echo base_url()?>anotace/<?= $k->id_knihy ?>"><?php echo $k->nazev_knihy;?></a> 
            </td>
            <td> 
                <?php echo $k->autor; ?>
            </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>