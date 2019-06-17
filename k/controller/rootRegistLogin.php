<?php
//新規作成時
  if(isset( $_POST["regist"] ) ){
    header("Location:../view/registration.php");
    exit;
  }

//ログイン時
  //ログイン成功時の処理
  else if( isset($_POST["login"]) ){
    require("../model/login.php");
    $rec = false;
    $rec = login( $_POST["user_name"],$_POST["password"] );
    if($rec){
      session_start();
      $_SESSION['user_id'] = $rec['user_id'];
      header("Location:../view/main.php");
      exit;
    }
    //失敗時
    else{
      header("Location:../index.php?loginSuccedIs=false");
      exit;
    }

  }

 ?>
https://github.com/suguru-kajiyama/k.git
