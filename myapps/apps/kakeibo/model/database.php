<?php
  class Table{
    public function __construct(){
      $this->dsn = "mysql:dbname=kakeibo;host=localhost;charset=utf8";
      $this->username = "root";
      $this->password = "root";
      $this->pdo = new PDO($dsn, $username, $password);
      $this->pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
  }
  //ユーザーテーブル
  class UserTable extends Table{}
  //収支テーブル
  class BalanceTable extends Table{}
  //カテゴリーテーブル
  class CategoryTable extends Table{}
?>
