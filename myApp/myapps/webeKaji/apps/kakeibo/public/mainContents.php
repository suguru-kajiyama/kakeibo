<?php
  $y = date("Y");
  $m = date("m");
  require_once(__DIR__."/../controller/route.php");
  if(!isset($_SESSION["userId"])){
    session_start();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/master.css"rel="stylesheet" type="text/css" media="all"/>
    <style media="screen">
      h1{
        margin: 0;
      }
      .header{
        width: 100%;
        border: solid;
      }.page{
        width: 200px;
        margin: 0 0 0 auto;
      }
      #cal_cell{
        display: inline-flex;
      }
      .cell{
        height: 80px;
        width: 80px;
        margin: 0 ;
        padding: 0 1px 0 1px;
        border-bottom: solid;
      }h3{
        padding:0;
        margin: 0;
      }h4{
        margin-top:0;
        margin-bottom :0;
      }
      #day_0 h4{
        color: red;
      }
      #day_6 h4{
        color:blue;
      }
      h5{
        margin:0;
        text-align:center;
      }
      p{
        line-height:0px;
      }
      .dummy{
        background-color: gray;
      }.mon:last-child{
        margin:0;
      }
      .container{
        display: flex;
        justify-content: space-around;
      }.cal_footer{
        display:flex;
        flex-direction: row;
        justify-content: space-between;
      }
      .subContents{
        display: flex;
        flex-direction: column;
      }
    </style>
    <script src="js/jquery.3.3.31.js"></script>
  <script type="text/javascript"src="js/balance.js"></script>
  <script type="text/javascript"src="js/js.js"></script>
  </head>

  <body>
    <!-- ヘッダー-->
    <div class="header">
      <h1>収支表</h1>
      <form action=""method="post" class="page">
        <input type="submit"name="Logout"value="ログアウト">
        <input type="submit"name="myPage"value="マイページ">
      </form>
    </div>
    <!-- メインコンテンツ-->
    <div class="container">
      <!--月ごとの収支 --->
      <div class="month">
        <div id="cal">
          <h3 id="date">javascriptが無効です</h3>
          <div id="cal_cell"></div>
            <div class="cal_footer">
            <p id="prev"> <span>前月へ</span>　<< </p>
            <p id="next"> <span>翌月へ</span> >> </p>
            </div>
        </div>
      </div>

      <div class="subContents">
        <!-- 日毎の収支-->
        <div class="day">
        </div>
        <!--登録フォーム-->
        <div class="input_form">
          <h3>収支登録</h3>
          <form class=""action="" method="post">
            <?php
              require(__Dir__."/view/displayCategory.php");
              $c = new displayCategory();
              $c -> displayRadio($_SESSION["userId"]);
              ?>

              <input type="date" id="hoge" name="date"><br>
              <input type="text" name="money"value="0">円<br>
              <input type="radio" name ='inout'value="-1"checked='checked'>支出<br>
              <input type="radio" name ='inout'value="1">収入<br>
              <input type="submit"id="addBalance"name="inputBalance"value="登録する"disabled><br>
            </form>
            <?php
              if(isset($inputError)){
                echo $inputError -> getErrorMessage();
              }
            ?>
          </div>
        </div>
    </div>
    <!--フッター--->
    <div class="footer">
      <a href="def.php"target="blank">お問い合わせ</a>
      <a href="def.php"target="blank">利用規約</a>
    </div>
    </body>
</html>
