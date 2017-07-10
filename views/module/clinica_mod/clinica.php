<table id="table" class="display">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Telefono</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $item=1;
      foreach ($this->ClinicaM->readClinica() as $row) {
     ?>
      <tr>
        <td><?php echo $item++; ?></td>
        <td><?php echo $row["cli_nombre"]; ?></td>
        <td><?php echo $row["cli_direccion"]; ?></td>
        <td><?php echo $row["cli_telefono"]; ?></td>
      </tr>
    <?php  }?>
  </tbody>
</table>
