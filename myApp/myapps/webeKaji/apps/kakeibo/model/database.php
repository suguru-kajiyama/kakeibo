<?php
  class Table{
    protected $pdo;
    public function __construct(){
      $this->dsn = "mysql:dbname=kakeibo;host=localhost;charset=utf8";
      $this->username = "root";
      $this->password = "root";
      $this->pdo = new PDO($this->dsn, $this->username, $this->password);
      $this->pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
  }
?>
