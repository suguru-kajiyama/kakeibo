<?php
  session_start();
  try{
    $id = $_SESSION['user_id'];
  }
  catch(Exception $e){
    headder("Location:../index.html");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
    <script type="text/javascript"src="script/jquery.3.3.31.js"></script>
    <script type="text/javascript"src="script/main.js"></script>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <div class="header">
          <h1>収支表</h1>
          <div class="">
            <a href="mypage.php">カテゴリー編集へ</a>
          </div>
        </div>

        <div class="container">
          <div class="side">

          </div>
          <div class="balances">
            <h3><span class='year'></span>年<span class='month'></span>月</h3>

            <div class="dates">

            </div>

            <div class="f">
              <p id='before'>前月</p>
              <p id='next'>来月</p>
              <div class="">
                <p>収入：<span id='in'>0</span>円</p>
                <p>支出：<span id='out'>0</span>円</p>
                <p>合計：<span id='total'>0</span>円</p>
              </div>
            </div>
          </div>
          <div class="kobetu">
            <h2>日毎</h2>
            <h3><span class="year"></span>年<span class="month"></span>月<span class="day"></span>日</h3>
            <form class="" action="registBalance.php" method="post">
              <input type="hidden" name="" value="">
              <?php
              require("../model/category.php");
              $r = returnUserCategory();
              foreach($r as $a){
                echo "<input type='radio' name='category' value='{$a['category_name']}'>";
                echo "{$a['category_name']}<br>";
              }
              ?>
              <input type="text" name="money" value="0">円<br>
              <input type="radio" name ='inout' value="-1">支出<br>
              <input type="radio" name ='inout'value="1">収入<br>
              <input type="submit" name="s" value="登録する"><br>
            </form>
          </div>
        <div class="footer">

        </div>
      </body>
    </html>
    <?php
      echo $_SESSION['user_id'];
     ?>
  </body>
</html>
