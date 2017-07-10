<?php

require_once("model/clinica.model.php");
Class ClinicaController{
  private $ClinicaM;

  public function __CONSTRUCT(){
    $this->ClinicaM = new ClinicaModel();
  }

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
  public function create(){
    $data = $_POST["data"];
    $data[3]=randomAlpha('30');
    $this->ClinicaM->createClinica($data);
    header("Location:gestionar-clinicas");
  }
  public function delete(){
    $field=$_GET["clicod"];
    $this->ClinicaM->deleteClinica($field);
    header("Location:gestionar-clinicas");
  }
  public function update(){
    $data = $_POST["dataclinica"];
    $this->ClinicaM->updateClinica($data);
    $return = array(true,"gestionar-clinicas");
    echo json_encode($return);
  }
}

 ?>
