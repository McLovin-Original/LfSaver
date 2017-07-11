<?php

class ContactoModel{

  private $pdo;

  public function __CONSTRUCT(){
    try{
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      $cod = $e->getCod();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
      $msn="Ha ocurrido un error";
    }
  }

  public function sendEmail(){
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
       $msn = "Correo invalido";
    }
    return $msn;
  }
}

?>
