<div class="box">
  <div class="box-header">
    <h3 class="box-title">Experiencias</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
  <table class="table table-bordered table-hover dataTable" id="example2">
    <thead>
      <tr>
        <th>id</th>
        <th>idioma</th>
        <th>Que Hacer</th>
        <th>consejos</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($exp as $key => $value): ?>
        <tr>
          <td><?php echo $value->getIdExperiencia ?></td>
          <td><?php echo $value->getIdioma() ?></td>
          <td><?php echo $value->getQuehacer() ?></td>
          <td><a href="<?php echo base_url() ?>exp/borrar/<?php echo $value->getIdExperiencia() ?>">Borrar</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  </div><!-- /.box-body -->
</div>
<style>
  table .img-responsive {
    border-radius: 50%;
    height: 50px;
}
</style>