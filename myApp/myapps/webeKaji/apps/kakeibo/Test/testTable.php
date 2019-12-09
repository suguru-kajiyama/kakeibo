<?php
  //require_once("../model/database.php");

  //$a = new UsersTable();
  //$b = new CategoriesTable();
  /*$c = new BalancesTable();
  //var_dump($a-> getUser("admin","pass"));
  echo"<br>////////////<br>";
  //var_dump($c->getOneDayBalances(2019,6,19,1));
  $d = new UsersTable();
  //echo __DIR__;
  $res = $c -> getOneDayBalances(1,2019,7,2);
  foreach($res as $r){
    echo $r['category_name']."<br>";
  }*///require_once("../view/daily_balance.php");
  require_once("../controller/validate.php");
  require_once("../error/Myerror.php");
  if(isset($_POST["date"])){
    $e = Validate::datecheck($_POST["date"]);
    if(!$e){
      $er = new MyError("日付えらー");
    }
  }if(isset($_POST["name"])){
    $e2 = Validate::nameCheck($_POST["name"]);
    if(!$e2){
      $er2= new MyError("なまええらー");}
  }
 ?><!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post">
       <input type="text" name="date" value="">
       <?php if(isset($er)) echo "{$er -> getErrorMessage()}::{$_POST['date']}"; ?>
        <br>
        <input type="text" name="name" value="">
        <?php if(isset($er2)) echo "{$er2 -> getErrorMessage()}::{$_POST['name']}::{$e2}"; ?>
          <br>
       <input type="submit" name="" value="てすと">
       <?php
        if(MyError::$ErrorFlag){
          echo "だめだったよ";
          echo MyError::$ErrorFlag;
        }else if( $_SERVER["REQUEST_METHOD"] != "POST"){}
          else{echo "OKKKK";
        }

        ?>
     </form>
   </body>
 </html>
