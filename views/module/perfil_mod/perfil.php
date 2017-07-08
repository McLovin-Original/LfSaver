	<ul id="accordion" class="accordion">
    <li>
    <div class="col col_4 iamgurdeep-pic">
		<?php if ($usuario["usu_imagen"]==="default.png") {
		# code...?>
			<img class="	img-responsive profileimg" alt="profileimg" src="views/assets/img/usuario/<?php echo $usuario['usu_imagen']; ?>">
		<?php  }else{
			?>
			<img class="img-responsive profileimg" alt="profileimg" src="views/assets/img/usuario/<?php echo $usuario['usu_id']."/".$usuario['usu_imagen']; ?>">
	<?php  } ?>
    <div class="username">
    <h2><?php echo $usuario["usu_nombre"]; ?> <small><i class="fa fa-map-marker"></i> Colombia (Medellín)</small></h2>
    <p><i class="fa fa-check-circle"></i> Donante.</p>
		<form class="" action="crear-imagen" method="post" enctype="multipart/form-data">
    	<input type="file" target="_blank" class="btn-o" name="img">
			<!--<a href="" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Subir </a>-->
			<button type="submit" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Subir </button>
		</form>
     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-v pull-right"></span></a>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Inbox<i class="fa fa-inbox"></i></a></li>
            <li><a href="#">Cerrar Sesión <i class="fa fa-sign-out"></i></a></li>
          </ul>
        </li>
      </ul>
  </div>
  </div>
    </li>
		<li>
			<div class="link"><i class="fa fa-user"></i>Acerca de mí<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<form class="" action="actualizar1" method="post">
				<li>Fecha de nacimiento: <input type="text" name="data[]" style="background-color:#444359" value="<?php echo $usuario['usu_nacimiento']; ?>"></li>
				<li>Dirección:           <input type="text" name="data[]" style="background-color:#444359" value="<?php echo $usuario['usu_direccion']; ?>"></li>
				<li>Correo Electrónico:  <input type="text" name="data[]" style="background-color:#444359" value="<?php echo $usuario['acc_email']; ?>"></li>
				<li>Número Telefónico:   <input type="text" name="data[]" style="background-color:#444359" value="<?php echo $usuario['usu_telefono'] ?>"></li>
				<button target="_blank"  class="btn-o" type="submit" name="button">Actualizar</button>
			</form>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-male"></i>Información Física<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
        <li><a>Edad: <span>19</span></a></li>
        <li><a>Altura: <span>1 metro 70 centimentros</span></a></li>
				<li><a>Peso: <span>65 kilos</span></a></li>
        <li><a>IMC (Peso/(altura)^2): <span>23.88</span></a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-heartbeat"></i>Información Medica<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
        <li><a>Estado: <span>Saludable</span></a></li>
        <li><a>Grupo Sanguíneo: <span>O</span></a></li>
				<li><a>RH: <span>Positivo(+)</span></a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-cogs"></i>Configuración<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
        <li><a>Nombre de Usuario: <span>JhonyAlexander07 </span></a></li>
        <li><a>Cambio de contraseña</a></li>
        <li><a>Acerca de LifeSaver</a></li>
	   </ul>
    </li>
  </ul>
