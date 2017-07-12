<?php

require_once("model/donacion.model.php");
Class DonacionController{
  private $DonacionM;

  public function __CONSTRUCT(){
    $this->DonacionM = new DonacionModel();
  }
  public function index(){
    require_once("views/module/donacion_mod/donacion.php");
    require_once("views/include/footer.php");
  }
  public function create(){
    $data = $_POST["data"];
    $data[5]=$_SESSION["user"]["id"];
    $data[6]=randomAlpha('30');
    $result=$this->DonacionM->createDonacion($data);
    $return = array(true,"$result");
    echo json_encode($return);
  }
}
 ?>
