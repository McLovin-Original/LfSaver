<?php
require_once("model/usu.model.php");
$UsuarioM = new UsuModel();
$correo[0]=$_SESSION["user"]["email"];
$usuario = $UsuarioM->readUsuariobyEmail($correo);
 ?>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                  <img src="views/assets/img/Logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                  <h2>LifeSaver</h2><img src="views/assets/img/Logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </div>
                <div class="navi">
                    <ul class="ca-menu">
                        <li class=""><a href="dashboard"></span>
                          <div class="ca-content">
                            <i class="fa fa-home ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Inicio</h2>
                    			</div>
                        </a></li>
                        <li><a href="#"></span>
                          <div class="ca-content">
                            <i class="fa fa-heartbeat ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Donación</h2>
                          </div>
                        <h3 class="ca-sub">Ayuda mutua</h3></a></li>
                        <li><a href="legislacion"></span>
                          <div class="ca-content">
                            <i class="fa fa-location-arrow ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Estatuto</h2>
                          </div>
                        <h3 class="ca-sub">Siempre cerca de ti</h3></a></li>
                        <li><a href="contacto"></span>
                          <div class="ca-content">
                            <i class="fa fa-inbox ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Contacto</h2>
                          </div>
                        <h3 class="ca-sub">Comunícate</h3></a></li>
                        <li><a href="mi_perfil"></span>
                          <div class="ca-content">
                            <i class="fa fa-user ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Mi Perfil</h2>
                          </div>
                        <h3 class="ca-sub">Personalizalo</h3></a></li>
                        <?php if ($_SESSION["user"]["rol"]=="admin") {
                          $url="gestionar-clinicas";
                        }else{
                          $url="clinicas";
                        } ?>
                        <li><a href="<?php echo $url ?>"></span>
                          <div class="ca-content">
                            <i class="fa fa-hospital-o ca-icon" aria-hidden="true"></i><span class="hidden-xs hidden-sm">
                            <h2 class="ca-main">Clinica</h2>
                          </div></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align cont-der" >
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <?php if ($usuario["usu_imagen"]==="default.png") {
                                            # code...?>
                                              <img src="views/assets/img/usuario/<?php echo $usuario['usu_imagen']; ?>" alt="user">
                                            <?php  }else{
                                              ?>
                                              <img src="views/assets/img/usuario/<?php echo $usuario['usu_id']."/".$usuario['usu_imagen']; ?>" alt="user">
                                          <?php  } ?>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $usuario["usu_nombre"]; ?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $usuario["acc_email"]; ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="CerrarSesion" class="view3 btn-sm active">Cerrar Sesión</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
