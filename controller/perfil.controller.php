<?php

require_once("model/usu.model.php");
class PerfilController{
  private $PerfilM;

  public function __CONSTRUCT(){
    $this->PerfilM = new UsuModel();
  }
  public function index(){
    require_once 'views/include/header.php';
    require_once 'views/include/menu.php';
    require_once 'views/module/perfil_mod/perfil.php';
    require_once 'views/include/footer.php';
  }
  public function actualizar1(){
    $data = $_POST["data"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      header("Location:mi_perfil-nulo");
    }else{
      $data[4]=$_SESSION["user"]["id"];
      $this->PerfilM->updateUsuario1($data);
      header("Location:mi_perfil");
    }
  }
  public function actualizar2(){
    $data = $_POST["data"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      header("Location:mi_perfil-nulo");
    }else{
      $data[2]=$_SESSION["user"]["id"];
      $this->PerfilM->updateUsuario2($data);
      header("Location:mi_perfil");
    }
  }
  public function actualizar3(){
    $data = $_POST["data"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      header("Location:mi_perfil-nulo");
    }else{
      $data[2]=$_SESSION["user"]["id"];
      $this->PerfilM->updateUsuario3($data);
      header("Location:mi_perfil");
    }
  }
  public function actualizar4(){
    $data = $_POST["data"];
    if (empty($data[0])) {
      $p=1;
      break;
    }else{
      $p=0;
    }
    if ($p==1) {
      header("Location:mi_perfil-nulo");
    }else{
      if (($data[1]!==$data[2]) || (strlen($data[1])<=8)) {
        header("Location:mi_perfil-pass");
      }else{
        $data[1] = password_hash($data[1],PASSWORD_DEFAULT);
        $data[2]=$_SESSION["user"]["id"];
        $this->PerfilM->updateUsuario4($data);
        header("Location:mi_perfil");
      }
    }
  }
}

?>
