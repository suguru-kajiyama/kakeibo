<?php
  require_once("../model/UsersTable.php");
  
  class Login{
    public function main($u,$p){
      //usestableの呼び出し
      $users = new UsersTable();
      //$p = password_hash($p,PASSWORD_DEFAULT);
      $u = $users -> getUser($u);
      //userがいるか
      //いるならセッションへ登録してtrue
      if($u && password_verify($p,$u["password"]) ){
        $this -> userIs($u['user_id']);
        return true;
      }//いない
      else{
        return false;
      }
    }
      //useridをセッションへの登録
    private function userIs($ui){
      session_start();
      $_SESSION['userId'] = $ui;
    }
  }
 ?>
