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
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'daniel.eco18@gmail.com';
        $mail->Password = '43276762.98121818043.2365508.deco.';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('daniel.eco18@gmail.com');
        $mail->addAddress('decardona34@misena.edu.co');
        $mail->Subject = 'Prueba de correo con PHP';
        $mail->Body = 'Mensaje enviado pais, casi que no hpta jajaja';
        $mail->CharSet = 'UTF-8';
        if ($mail->send()) {
           $msn = "Envio correctamente";
        } else {
           $msn = "Correo invalido ".$mail->ErrorInfo;
        }
        // return $msn;
        echo $msn;
      }
  }

?>
