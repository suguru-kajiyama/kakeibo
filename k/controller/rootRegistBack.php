<?php
  if(isset( $_POST["regist"] ) ){
    //入力値チェック
    if(empty($_POST["password"]) || empty($_POST["user_name"]) ){
      header("Location:../view/registration.php");
      exit;
    }
    //登録
    require("../model/regist.php");
    regist($_POST['user_name'],$_POST['password'] );
    header("Location:../index.php?registSuccedIs=true");
    exit;
  }
  else if( isset($_POST["back"]) ){
    header("Location:../index.php");
    exit;
  }
 ?>
