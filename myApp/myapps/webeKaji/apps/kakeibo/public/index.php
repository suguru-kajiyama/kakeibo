<?php
  require_once(__DIR__."/../controller/route.php");
  //require_once(__DIR__."/../error/Myerror.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ログイン</h1>
    <div class="">
      <form class="" action="" method="post">
        <p>ユーザー名<input type="text" name="user_name" value=""></p>
        <p>パスワード<input type="password" name="password" value=""></p>
        <input type="submit" name="login" value="ログイン">
        <input type="submit" name="signUpPage" value="新規作成">
      </form>
      <?php
      if(isset($inputError)){
        echo $inputError -> getErrorMessage();
      }if(isset($resultError)){
        echo $resultError -> getErrorMessage();
      }
       ?>
    </div>
  </body>
</html>
