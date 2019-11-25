<?php
require_once("database.php");
//ユーザーテーブル
class UsersTable extends Table{
  //名前とパスワードの一致するユーザーを返す
  public function getUser($u){
    $sql = "SELECT * FROM USERS WHERE(user_name='{$u}')";
    $stmt = $this -> pdo -> prepare($sql);
    $stmt -> execute();
    $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
    return $rec;
  }//新規登録用
  public function setUser($u,$p){
    $sql = "INSERT INTO USERS(user_name,password) VALUES ('{$u}','{$p}')";
    $stmt = $this -> pdo -> prepare($sql);
    $stmt -> execute();
  }
}
 ?>
