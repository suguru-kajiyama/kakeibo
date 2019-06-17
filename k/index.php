<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ログイン</h1>
    <div class="">
      <form class="" action="controller/rootRegistLogin.php" method="post">
        <p>ユーザー名<input type="text" name="user_name" value=""></p>
        <p>パスワード<input type="text" name="password" value=""></p>
        <input type="submit" name="login" value="ログイン">
        <input type="submit" name="regist" value="新規作成">
      </form>
      <?php
      if( isset($_GET['loginSuccedIs'])){
        echo "<p>ユーザー名もしくはパスワードが不正です</p>";
      }if( isset($_GET['registSuccedIs'])){
        echo "<p>新規作成に成功しました</p>";
      }
       ?>
    </div>
  </body>
</html>
