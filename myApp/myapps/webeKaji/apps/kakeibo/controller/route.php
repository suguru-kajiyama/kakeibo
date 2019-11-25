<?php
  require_once("validate.php");
  require_once("login.php");
  require_once("logout.php");
  require_once("web.php");
  require_once("signUp.php");
  require_once("category.php");
  require_once("addBalanceData.php");
  require_once("../error/Myerror.php");
  //loginする
    //成功
  if(isset($_POST['login'])){
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      $l = new Login();
      if($l -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../public/mainContents.php");
        exit;
      }
      else{
        $e = new Myerror();
        $e -> setErrorMessage("名前かパスワードが違います");
        require("../public/index.php");
        exit;
      }
    }//失敗
    else{
      $e = new Myerror();
      $e -> setErrorMessage("入力値が不正です");
      require("Location:../public/index.php");
      exit;
    }
  }//登録ぺーじへ
  if(isset($_POST['signUpPage'])){
    header("Location:../public/signUpPage.php");
    exit;
  }//登録できるか
  if(isset($_POST['signup'])){
    //入力チェック
    if(Validate::sqlcheck( $_POST['user_name']) && Validate::sqlcheck($_POST['password'] )){
      $s = new signUp();
      //signup成功
      if($s -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../public/index.php");
        exit;
      }//失敗
      else{
        $e = new Myerror();
        $e -> setErrorMessage("ユーザー名が重複しています");
        require("../public/signUpPage.php");
        exit;
      }
    }else{
      $e = new Myerror();
      $e -> setErrorMessage("入力値が不正です");
      require("../public/signUpPage.php");
      exit;
    }
  }//戻る
  if(isset($_POST['back'])){
    header("Location:../public/index.php");
    exit;
  }//ログアウト
  if(isset($_GET['logout'])){
    $l = new Logout();
    $l -> main();
    header("Location:../public/index.php");
    exit;
  }//mypage.phpへ
  if(isset($_GET['mypage'])){
    header("Location:../public/myPage.php");
    exit;
  }//カテゴリー追加
  if(isset($_POST['addCategory'])){
    $c = new category();
    //カテゴリー名に問題がないか
    if( $c -> set($_POST['userId'],$_POST['newCategory']) ){
      header("Location:../public/myPage.php");
      exit;
    }
    else{
      $e = new Myerror();
      $e -> setErrorMessage("入力値が不正です");
      require("../public/mypage.php");
    }
  }//削除
  if(isset($_POST['removeCategory'])){
    $c = new category();
    $c -> delete($_POST['category_id']);
    header("Location:../public/myPage.php");
    exit;
  }//収支登録
  if(isset($_POST['inputBalance']) ){
    $m = $_POST['money'];
    $d = $_POST['date'];
    $io = $_POST['inout'];
    $ci = $_POST['category_id'];
    $ab = new addBalanceData();

    if($ab -> add($d,$m,$io,$ci) ){
      header("Location:../public/mainContents.php");
      exit;
    }
    else{
      $e = new Myerror();
      $e -> setErrorMessage("入力値が不正です");
      require("../public/mainContents.php");
    }
  }//何もなければトップページへ
  //header("Location:../public/index.php);
 ?>
