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
      echo "<script>alert('Campos Nulos')</script>";
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
      echo "<script>alert('Campos Nulos')</script>";
    }else{
      $data[2]=$_SESSION["user"]["id"];
      $this->PerfilM->updateUsuario2($data);
      header("Location:mi_perfil");
    }
  }
}

?>
