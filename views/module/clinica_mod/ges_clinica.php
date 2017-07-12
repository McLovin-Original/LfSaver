<form action="crear-clinica" method="post">
  <input type="text" name="data[]" value="" placeholder="nombre">
  <input type="text" name="data[]" value="" placeholder="direccion">
  <input type="text" name="data[]" value="" placeholder="telefono">
  <button type="submit" name="button">REGISTRAR</button>
</form>
<table id="table" class="display">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $item=1;
      foreach ($this->ClinicaM->readClinica() as $row) {
     ?>
    <form class="" action="" method="post">
      <tr>
        <td><?php echo $item++; ?></td>
        <td><input type="text" name="data" value="<?php echo $row["cli_nombre"]; ?>"></td>
        <td><input type="text" name="data" value="<?php echo $row["cli_direccion"]; ?>"></td>
        <td><input type="text" name="data" value="<?php echo $row["cli_telefono"]; ?>"></td>
        <input type="hidden" name="data" value="<?php echo $row['cli_id'];?>">
        <td>
          <a href="">
            <i id="uclinica" class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
          </a>
          -
          <a onclick="return confirm('¿Estas seguro?');" href="index.php?c=clinica&a=delete&clicod=<?php echo $row['cli_id'];?>">
            <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; "></i>
          </a>
        </td>
      </tr>
    </form>
    <?php  }?>
  </tbody>
</table>
