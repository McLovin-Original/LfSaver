<div class="contenedor-login-seccion5 col-xs-12 col-sm-12 col-md-5 col-lg-4">
    <div class="col-sm-8 col-sm-offset-2 text">
      <h1 class="title">LifeSaver</h1>
    </div>
      <div class="col-sm-10">
        <h3 class="h3-eres">"Si ayudo a una persona a tener esperanza no habré vivido en vano"  Martin Luther King</h3>
      </div>
</div>
<div class="top-content5 col-xs-12 col-sm-12 col-md-7 col-lg-8">
  <h2 class="login">Completa tu perfil</h2>
      <div class="col-sm-5 col-sm-offset-1">
        <form role="form" action="crear" method="post" id="frm_completar1" class="r-form">
          <h3 class="text-justify info-title">Información personal</h3>
          <div class="form-group ">
            <select class="form-control" id="tipo_comp1" required>
              <option class:"opcion" value="CC">Cédula de ciudadanía (C.C)</option>
              <option class:"opcion" value="TI">Tarjeta de Identidad (T.I)</option>
              <option class:"opcion" value="CE">Cédula Extranjera (C.E)</option>
            </select>
          </div>
          <div class="form-group ">
            <label class="sr-only">Número de Identificación</label>
            <input type="number" class="r-form-Usuario form-control " id="docu_comp1"  placeholder="Número de identificación" required>
          </div>
          <div class="form-group ">
            <label class="sr-only">Dirección de Residencia</label>
            <input type="text" class="r-form-Usuario form-control " id="dire_comp1" placeholder="Ingresa tu Dirección Completa" required>
          </div>
          <div class="form-group ">
            <label class="sr-only">Número Telefónico</label>
            <input type="number" class="r-form-Usuario form-control " id="tele_comp1" placeholder="Ingresa tu Número Telefónico" required>
          </div>
          <div class="form-group ">
            <label for="fech_comp1">Fecha Nacimiento</label>
            <input type="date" class="r-form-Usuario form-control " id="fech_comp1"  required>
          </div>
          <button type="submit" name="button" id="btnCompletar" class="btn btn-primary">SIGUIENTE <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </form>
      </div>
</div>
<?php require_once("completar2.php");
  require_once("completar3.php");
?>



<!--
<h3 class="text-justify info-title">Información Física</h3>
<div class="form-group">
  <label class="sr-only">Peso</label>
  <input type="text" class="r-form-Usuario form-control peso" name="data[]"  placeholder="Peso (Kilogramos)" required>
  <label class="sr-only">Altura</label>
  <input type="text" class="r-form-Usuario form-control altura" name="data[]" id="" placeholder="Altura (Centimetros)" required>
</div>


<h3 class="text-justify info-title">Información Médica</h3>
<div class="form-group">
  <label class="text-justify">¿Cuenta con carnet de afiliación médica? </label>
  <label for="yes" id="yes" class="radio-inline">
    <input type="checkbox"  name="" required> Si
  </label>
  <label for="no" id="no" class="radio-inline wthree">
    <input type="checkbox" name=""> No
  </label>
</div>
-->
