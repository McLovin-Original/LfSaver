<?php

Class ClinicaController{

  public function index(){
    require_once 'views/include/header.php';
    require_once 'views/include/menu.php';
    require_once 'views/module/clinica_mod/clinica.php';
    require_once 'views/include/footer.php';
  }
  public function gestionarClinica(){
    require_once 'views/include/header.php';
    require_once 'views/include/menu.php';
    require_once 'views/module/clinica_mod/ges_clinica.php';
    require_once 'views/include/footer.php';
  }
}

 ?>
