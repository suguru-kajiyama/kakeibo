<?php
  require("validate.php");
  require("login.php");
  require("logout.php");
  require("web.php");
  require("signUp.php");
  require("category.php");
  require("addBalanceData.php");
  //loginする
    //成功
  if(isset($_POST['login'])){
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      $l = new Login();
      if($l -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../mainContents.php");
        exit;
      }
      else{
        header("Location:../index.php?code=2");
        exit;
      }
    }//失敗
    else{
      header("Location:../index.php?code=1");
      exit;
    }
  }//登録ぺーじへ
  if(isset($_POST['signUpPage'])){
    header("Location:../signUpPage.php");
    exit;
  }//登録できるか
  if(isset($_POST['signup'])){
    //入力チェック
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      $s = new signUp();
      //signup成功
      if($s -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../index.php");
        exit;
      }//失敗
      else{
        header("Location:../signUpPage.php?code=1");
        exit;
      }
    }else{
      header("Location:../signUpPage.php?code=1");
      exit;
    }
  }//戻る
  if(isset($_POST['back'])){
    header("Location:../index.php");
    exit;
  }//ログアウト
  if(isset($_GET['logout'])){
    $l = new Logout();
    $l -> main();
    header("Location:../index.php");
    exit;
  }//mypage.phpへ
  if(isset($_GET['mypage'])){
    header("Location:../myPage.php");
    exit;
  }//カテゴリー追加
  if(isset($_POST['addCategory'])){
    $c = new category();
    $c -> set($_POST['userId'],$_POST['newCategory']);
    header("Location:../myPage.php");
    exit;
  }//削除
  if(isset($_POST['removeCategory'])){
    $c = new category();
    $c -> delete($_POST['category_id']);
    header("Location:../myPage.php");
    exit;
  }//収支登録
  if(isset($_POST['inputBalance']) ){
    $m = $_POST['money'];
    $d = $_POST['date'];
    $io = $_POST['inout'];
    $ci = $_POST['category_id'];
    $ab = new addBalanceData();
    $ab -> add($d,$m,$io,$ci);
    header("Location:../mainContents.php");
    exit;
  }//何もなければトップページへ
  header("Location:../index.php");
  exit;
 ?>
