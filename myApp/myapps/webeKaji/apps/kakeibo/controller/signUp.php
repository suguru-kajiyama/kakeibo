<?php
  require_once("../model/UsersTable.php");
  class signUp{
    //signupの時の処理
    public function main($n,$p){
      //データベースにユーザ名が重複してないか確認
      //してない
      if(!($this -> userExist($n)) ){
        //登録してtrueを返す
        $this -> UserSignUp($n,$p);
        return true;
      }//してた
      else{
        return false;
      }
    }private function userSignUp($n,$p){
      $db = new UsersTable();
      //パスワードハッシュ化
      $p = password_hash($p,PASSWORD_DEFAULT);
      $db -> setUser($n,$p);
    }private function userExist($n){
      $db = new UsersTable();
      //名前の重複チェックしている
      return $db -> getUser($n);
    }
  }
 ?>
