<?php
  session_start();
  $id;
  if(isset($_SESSION["user_id"]) ){
    $id = $_SESSION['user_id'];
  }else{
    header("Location:../index.php");
    exit;
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="master.css"rel="stylesheet" type="text/css" media="all" />
    <script src="jquery.3.3.31.js"></script>
    <script src="main1.js"></script>
    <script>console.log("aa");</script>
  </head>

  <body>
    <div class="header">
      <h1>収支表</h1>
        <div class="">
          <a href="mypage.php">カテゴリー編集へ</a>
          <a href="../controller/logout.php">戻る</a>
        </div>
    </div>

    <div class="container">
      <div class="side">

      </div>
      <div class="balances">
        <h3>
          <?php
            $y = date('Y');
            $m = date('m')."";
            $d = date('d');
            if(isset($_POST["y"]) && isset($_POST["m"]) ){
              $y = $_POST["y"];
              $m = $_POST["m"];
            }
            if(isset( $_POST["d"]) ){
              $d = $_POST["d"];
            }
            if(isset($_POST["before"]) ){
              $y = date("Y",mktime(0,0,0,$m-1,1,$y));
              $m = date("m",mktime(0,0,0,$m-1,1,$y));

            }if(isset($_POST["next"]) ){
              $y = date("Y",mktime(0,0,0,$m+1,1,$y));
              $m = date("m",mktime(0,0,0,$m+1,1,$y));
            }
            echo"<h3>{$y}年{$m}月</h3>\n";
          ?>
           </h3>

      <div class="dates">
          <table id="dates">
            <tr>
              <th>日付</th><th>収入</th><th>支出</th><th>合計</th>
            </tr>
            <?php
              require_once("../controller/showB.php");
              $ba = new showB();
              echo ("{$y} : {$m}");
              $ba->showBalance($y,$m);
              ?>
          </table>
      </div>

      <div class="f">
          <form class="" action="main.php" method="post">
            <input type="hidden" name="y" value=<?php echo"{$y}" ;?>>
              <input type="hidden" name="m" value=<?php echo"{$m}";?>>
              <button type="submit" name="before">前月</button>
              <button type="submit" name="next">翌月</button>
          </form>

      </div>
    </div>

    <div class="kobetu">
        <h3 id="kobetubalance"><?php echo "{$y}年{$m}月{$d}日";?></h3>
        <input type="hidden" id="y" value="<?php echo"{$y}" ;?>">
        <input type="hidden" id="m" value="<?php echo"{$m}" ;?>">
        <input type="hidden" id="d" value="<?php echo"{$d}" ;?>">
          <table id="dayb">
            <tr>
              <th class="io">収支</th><th class="category">種類</th><th class="money">金額</th>
            </tr>
            <?php
              //$ba ->　showIndiBalance($y,$m,$d);
              require_once("../controller/t.php");
            ?>
          </table>
        <form class="" action="../controller/registBalance.php" method="post">
          <input id = "inputdate"type="text" name="date" value="<?php
            $ymd = "{$y}{$m}{$d}";
            echo $ymd;?>"><br>
          <?php
            require("../model/category.php");
            $r = returnUserCategory();
            $i = 0;
            foreach($r as $a){
              if($i++==0){
                echo "<input type='radio' checked='checked' name='category_id' value='{$a['category_id']}'>";
              }
              else{
                echo "<input type='radio' name='category_id' value='{$a['category_id']}'>";
              }
              echo "{$a['category_name']}<br>";
            }
          ?>
          <input type="text" name="money" value="0">円<br>
          <input type="radio" name ='inout' value="-1"checked='checked'>支出<br>
          <input type="radio" name ='inout'value="1">収入<br>
          <input type="submit" name="s" value="登録する"><br>
        </form>
      </div>
        <div class="footer">

        </div>
    </body>
</html>
