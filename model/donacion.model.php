<?php

class DonacionModel{

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
    public function createDonacion($data){
      try{
        $sql="INSERT INTO donacion VALUES(?,?,?,?,?,?,?)";
        $query=$this->pdo->prepare($sql);
        $query->execute(array($data[6],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5]));
        $msn= "dashboard";
      }catch (PDOException $e) {
        $cod = $e->getCode();
        $file = $e->getFile();
        $line = $e->getLine();
        $text = $e->getMessage();
        DataBase::errorLog($cod,$file,$line,$text);
        $msn="error";
      }
      return $msn;
  }
}
?>
