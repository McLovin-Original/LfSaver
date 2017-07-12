<?php
require_once 'model/contacto.model.php';
require_once 'lib/PHPMailer/PHPMailerAutoload.php';

class ContactoController{
  private $ContactoM;

  public function __CONSTRUCT(){
    $this->ContactoM = new ContactoModel();
  }

    public function index(){
      require_once 'views/include/header.php';
      require_once 'views/include/menu.php';
      require_once 'views/module/contacto_mod/contacto.php';
      require_once 'views/include/footer.php';
    }

    public function sendEmailContact(){
      $data = $_POST["contacto"];
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'app.lifesaver101@gmail.com';
      $mail->Password = 'lifesaver123456';

      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->setFrom('app.lifesaver101@gmail.com','LFSaver Staff');
      $mail->addAddress("app.lifesaver101@gmail.com");
      $mail->isHTML(true);
      $mail->Subject = 'Contacto de: '.$_SESSION["user"]["nombre"]." ".$_SESSION["user"]["apellido"];
      $mail->Body = "Contacto";
      $mail->MsgHTML("Correo de: ".$_SESSION["user"]["email"]."<br>"."<br>".$data);    
      $mail->CharSet = 'UTF-8';
      if ($mail->send()) {
          $msn = "Correo enviado con éxito, te responderemos lo más pronto posible";
      }
      header("Location: index.php?c=contacto&msn=$msn");
    }
  }

?>
