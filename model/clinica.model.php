<?php

class ClinicaModel{

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
  public function createClinica($data){
    try {
      $sql="INSERT INTO clinica VALUES(?,?,?,?)";
      $query=$this->pdo->prepare($sql);
      $query->execute(array($data[3],$data[0],$data[1],$data[2]));
      $msn= "inicio";
    } catch (PDOException $e) {
      $cod = $e->getCode();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
      $msn="error";
    }
  return $msn;
  }

  public function readClinica(){
    try{
      $sql="SELECT * FROM clinica";
      $query = $this->pdo->prepare($sql);
      $query -> execute();
      $result = $query->fetchALL(PDO::FETCH_BOTH);
    }catch(PDOException $e){
      $cod = $e->getCod();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
    }
      return $result;
  }
  public function readClinicabyId($field){
    try{
      $sql="SELECT * FROM clinica WHERE cli_id = ?";
      $query = $this->pdo->prepare($sql);
      $query -> execute(array($field));
      $result = $query->fetch(PDO::FETCH_BOTH);
    }catch(PDOException $e){
      $cod = $e->getCod();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
    }
      return $result;
  }
  public function updateClinica($data){
    try{
      $sql="UPDATE clinica SET cli_nombre = ?, cli_direccion = ?, cli_telefono = ? WHERE cli_id = ?";
      $query = $this->pdo->prepare($sql);
      $query -> execute(array($data[0],$data[1],$data[2],$data[3]));
    }catch(PDOException $e){
      $cod = $e->getCod();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
    }
  }
  public function deleteClinica($field){
    try{
      $sql="DELETE FROM clinica WHERE cli_id = ?";
      $query = $this->pdo->prepare($sql);
      $query -> execute(array($field));
    }catch(PDOException $e){
      $cod = $e->getCod();
      $file = $e->getFile();
      $line = $e->getLine();
      $text = $e->getMessage();
      DataBase::errorLog($cod,$file,$line,$text);
    }
  }
}

?>
