<?php
  require_once("../model/database.php");
  class Logout{
    //session userIdを消す
    public function main(){
      session_start();
      $_SESSION['userId'] = null;
    }
  }
 ?>
