<?php
  require("validate.php");
  require("login.php");
  require("web.php");
  //loginする
    //成功
  if(isset($_POST['login'])){
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      if(userExitIs($_POST['user_name'],$_POST['password'] ) ){
        $ui = 1;
        userIs($ui);
      }
      else{}
      exit;
    }//失敗
    else{
      header("Location:../index.php");
      exit;
    }
  }//登録ぺーじへ
  if(isset($_POST['signUpPage'])){
    echo $_POST['signUpPage'];
    header("Location:../signUpPage.php");
    exit;
  }//登録できるか
  if(isset($_POST['signup'])){
    //成功
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      header("Location:../index.php?code=3");
      exit;
    }else{
      header("Location:../signUpPage.php");
      exit;
    }
    //失敗
  }//戻る
  if(isset($_POST['back'])){
    header("Location:../index.php");
    exit;
  }
  if(isset($_POST['mypage'])){
    exit;
  }
  header("Location:../index.php");
  exit;
 ?>
