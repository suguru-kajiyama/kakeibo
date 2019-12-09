<?php
  require_once("validate.php");
  require_once("login.php");
  require_once("logout.php");
  require_once("web.php");
  require_once("signUp.php");
  require_once("category.php");
  require_once("addBalanceData.php");
  require_once("../error/MyError.php");
  //loginする
    //成功
  if(isset($_POST['login'])){
    if(Validate::namecheck( $_POST['user_name']) && Validate::passwordcheck($_POST['password'] )){
      $l = new Login();
      if($l -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../public/mainContents.php");
        exit;
      }
      else{
        $resultError = new MyError("名前かパスワードが違います");
        require("../public/index.php");
        exit;
      }
    }//失敗
    else{
      $inputError = new MyError("入力値が不正です");;
      require("../public/index.php");
      exit;
    }
  }//登録ぺーじへ
  if(isset($_POST['signUpPage'])){
    header("Location:../public/signUpPage.php");
    exit;
  }//登録できるか
  if(isset($_POST['signup'])){
    //入力チェック
    if(Validate::namecheck( $_POST['user_name']) && Validate::passwordcheck($_POST['password'] )){
      $s = new signUp();
      //signup成功
      if($s -> main($_POST['user_name'],$_POST['password'])){
        header("Location:../public/index.php");
        exit;
      }//失敗
      else{
        $nameExistError = new MyError("ユーザー名が重複しています");
        require("../public/signUpPage.php");
        exit;
      }
    }else{
      $inputError = new MyError("入力値が不正です");
      require("../public/signUpPage.php");
      exit;
    }
  }//戻る
  if(isset($_POST['back'])){
    header("Location:../public/index.php");
    exit;
  }//ログアウト
  if(isset($_POST['Logout'])){
    $l = new Logout();
    $l -> main();
    header("Location:../public/index.php");
    exit;
  }//mypage.phpへ
  if(isset($_POST['myPage'])){
    header("Location:../public/myPage.php");
    exit;
  }
//mupageでの処理
  //カテゴリー追加
  if(isset($_POST['addCategory']) ){
      //カテゴリー名のチェック
      if(Validate::namecheck($_POST['newCategory'])){
        $c = new category();
        //重複確認
        if(! $c -> set($_POST['userId'],$_POST['newCategory'])){
          //名前がかぶっている
          $nameExistError = new MyError("名前が存在します");
        }
      }else{
        $inputError = new MyError("入力値が不正です");
      }
  }
  //削除
  if(isset($_POST['removeCategory'])){
    $c = new category();
    $c -> delete($_POST['category_id']);
    //require_once("../public/myPage.php");
    //exit;
  }
//maincontentsの処理
  //収支登録
  if(isset($_POST['inputBalance']) ){
    $m = $_POST['money'];
    $d = $_POST['date'];
    $io = $_POST['inout'];
    $ci = $_POST['category_id'];
    $ab = new addBalanceData();
    if(Validate::numberCheck($m) && Validate::datecheck($d) && Validate::numberCheck($ci)){
      if($ab -> add($d,$m,$io,$ci) ){
        //require_once("../public/mainContents.php");
        exit;
      }
    }
    else{
      $inputError = new MyError("入力値が不正です");
    }
      //require_once("../public/mainContents.php");
    }
  //何もなければトップページへ
  //header("Location:../public/index.php);
 ?>
