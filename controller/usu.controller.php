<?php
require_once 'model/usu.model.php';

class UsuController{

  private $UsuarioM;

  public function __CONSTRUCT(){
    $this->UsuarioM = new UsuModel();
  }
  public function index(){
    require_once 'views/include/header.php';
    require_once 'views/module/usu_mod/create.php';
    require_once 'views/include/footer.php';
  }
  public function validarEmail(){
    $data[0] = $_POST["email"];
    $result = $this->UsuarioM->readUsuariobyEmail($data);
    if(count($result[0])>0){
      $return = array(false,"El correo ya existe");
    }else{
      $return = array(true,"");
    }
    echo json_encode($return);
  }
  public function create(){
    $data=$_POST["datauser"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$data[2])) {
      $return = array(false,"Correo Invalido");
    }elseif(($data[3]!==$data[4]) || (strlen($data[3])<=8) || (!preg_match('`[0-9]`',$data[3]))){
       $return = array(false,"Contraseña Invalida");
    }elseif($p==1){
      $return = array(false,"Campos Nulos");
    }else{
      $data[3]=password_hash($data[3],PASSWORD_DEFAULT);
      $data[5]=randomAlpha('30');
      $data[6]=randomAlpha('30');
      $data[7]="prueba";
      $data[8]=NULL;
      $data[9]="default.png";
      $data[10]=0;
      $result=$this->UsuarioM->usuarioCreate($data);
      $return = array(true,"$result");
    }
      echo json_encode($return);
  }
  public function imagen(){
    $flag = false;
    $folder=$_SESSION["user"]["id"];
    $tmp = $_FILES['img']['tmp_name'];
    $pathImage = "views/assets/img/usuario/".$folder."/";
    if(!is_dir($pathImage)){
      mkdir($pathImage,0777);
    }
    if($tmp != ""){
       $Event =  $pathImage.$_FILES['img']['name'];
       $flag = true;
    }else{
       $flag = false;
    }
    if($flag == true){
      if(move_uploaded_file($tmp, $Event)) {
        echo "<script>console.log('Los archivos se subieron correctamente!')</script>";
      }else{
        echo "<script>console.log('Los archivos se subieron mal!')</script>";
      }
    }
    $data[0]=$_SESSION["user"]["email"];
    $data[1]=$_FILES["img"]["name"];
    $data[2]=$_SESSION["user"]["id"];
    $ruta=$this->UsuarioM->readUsuariobyEmail($data);
    $dir=$ruta["usu_imagen"];
    if ($dir!=="default.png") {
      unlink("views/assets/img/usuario/$folder/$dir");
    }
    $this->UsuarioM->usuarioImagen($data);
    header("Location:mi_perfil");
  }
  public function recoverPass(){
    require_once 'views/include/header.php';
    require_once 'views/module/usu_mod/recuperar.php';
    require_once 'views/include/footer.php';
  }
  public function newpass(){
    require_once 'views/include/header.php';
    require_once 'views/module/usu_mod/newpass.php';
    require_once 'views/include/footer.php';
  }
  public function completar1(){
    require_once 'views/include/header.php';
    require_once 'views/module/usu_mod/completar/completar1.php';
    require_once 'views/include/footer.php';
  }
  public function crearCompletar1(){
    $data = $_POST["datacomp1"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"campos nulos");
    }else{
      $data[5]=$_SESSION["user"]["id"];
      $result=$this->UsuarioM->updateUsuarioById($data);
      $return = array(true,"");
    }
    echo json_encode($return);
  }
  public function crearCompletar2(){
    $data = $_POST["datacomp2"];
    for ($i=0; $i <count($data) ; $i++) {
      if (empty($data[$i])) {
        $p=1;
        break;
      }else{
        $p=0;
      }
    }
    if ($p==1) {
      $return = array(false,"campos nulos");
    }else{
      $data[4]=$_SESSION["user"]["id"];
      $result=$this->UsuarioM->updateUsuarioById2($data);
      $return = array(true,"");
    }
    echo json_encode($return);
  }
  public function crearCompletar3(){
    $data[0] = $_POST["datacomp3"];
    if ($data[0]!="NO") {
      if (preg_match('`[a-z]`',$data[0])) {
        $p=0;
      }else{
        $p=1;
      }
    }else{
      $p=1;
    }
    if ($p==0) {
      $return = array(false,"Documento Invalido");
    }else{
      $data[1]=$_SESSION["user"]["id"];
      $result=$this->UsuarioM->updateUsuarioById3($data);
      $result=$this->UsuarioM->updateTour($data);
      $return = array(true,"dashboard");
    }
    echo json_encode($return);
  }

// Crear cuenta
  /*public function create(){

      $data=$_POST["data"];
      $ver=$_POST["ver"];
      $data[7] = "USER-".date('Ymd')."-".date('hms');
      $data[6] = 1;
      $data[3] = password_hash($data[3],PASSWORD_DEFAULT);
      $data[8] = randCod(50);
      $data[10] = "Inactivo";
      $data[9] = 0;

      $result=$this->model->create($data);
      // if((rowcount($data[9])) > 0){
        // $valor = true;
        // echo json_encode($valor);
      // }
      $msn = $this->model->mailAct($data);

      echo $result;
      header("location: $result");

  }


//Validar correo
  public function validar(){
    $email[0] = $_POST["email"];
    $response = $this->model->readUserbyEmail($email);
    if(count($response[0])<=0){
      $return = array("El correo no existe",false);
    }else{
      if($response["acc_est"] != "activo"){
        $estado = $response["acc_est"];
        $return = array("El usuario esta $estado",false);
      }else{
        $return = array("",true);
      }
  }
  echo json_encode($return);
}

// Correo existente - Registro
public function validarEmail(){
  $email[0] = $_POST["email"];
  $response = $this->model->readUserbyEmail($email);
  if(count($response[0])>0){
    $return = array("El correo ya existe",false);
  }else{
    $return = array("",true);
  }
  echo json_encode($return);
}


//Validar contraseña segun el correo ingresado
  public function userAut(){
    $data[0] = $_POST["email"];
    $data[1] = $_POST["pass"];

    $userData = $this->model->readUserbyEmail($data);

    if(password_verify($data[1],$userData["acc_pass"])){

      $_SESSION["user"]["token"] = $userData["acc_token"];
      $_SESSION["user"]["cod"] = $userData["usu_cod"];
      $_SESSION["user"]["name"] = $userData["usu_nom"];
      $_SESSION["user"]["lastn"] = $userData["usu_ape"];
      $_SESSION["user"]["email"] = $_POST["email"];
      $return = array(true,"Bienvenido",$_SESSION["user"]["token"]);
    }else{
      $return = array(false,"Contraseña incorrecta","");
    }
    echo json_encode($return);
  }


//Recuperar contraseña {

// --> Recuperar
public function recover(){
  $correo[0] = $_POST["email"];
  // $documento = $_POST["documento"];
  $result = $this->model->readUserbyEmail($correo);
  if(count($result[0])<=0){
    $return = array("El correo no existe",false);
  }else{
    // if($result["usu_documento"] != $documento){
    //   $return = array("El correo no conincide con la cuenta",false);
    // }else{
      $return = array("",true);
      // $enviar = $this->model->mail($correo);
      // header("location: ../login");
    // }
  }
  echo json_encode($return);
}

public function enviar_email(){
  $email=$_POST["email"];
  $result = $this->model->mail($email);
  echo json_encode($result);
}

//verificar email
public function verificar_email(){
  $email = $_POST["email"];
  $result = $this->model->readUserbyEmail($email);
  if(count($result[0])<=0){
    $return = array("El correo no existe",false);
  }else{
    $return = array("",true);
  }
  echo json_encode($return);
}

//var auth
public function autenticar(){
  if($_GET["auth"]==true){
    $data[0] = $_GET["token"];
    $data[1] = "activo";
    $result = $this->model->updateUserByToken($data);
    header("location: login");
  }
}

//Cambiar contraseña
public function cambio(){
  $data = $_POST["data"];
  $result = $this->model->new_pass($data);
  echo $result;
}
//}*/

  public function logout(){
    session_destroy();
    header("location: inicio");
  }
}
?>
