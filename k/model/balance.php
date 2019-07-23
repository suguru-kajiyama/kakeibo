<?php
  class b {
   public function registBalance($category_id,$dat,$inOut,$money){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "INSERT INTO balance(user_id,category_id,in_out,money,balance_date)
            VALUES({$user_id},'{$category_id}',{$inOut},{$money},{$dat})
    ";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }
  public function returnBalance($y,$m){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $l = date("d",mktime(0,0,0,$m+1,0,$y));
    $start = "{$y}-{$m}-01 00:00:00";
    $last = "{$y}-{$m}-{$l} 23:59:59";
    $sql = "SELECT * FROM balance WHERE (user_id = {$user_id} )AND (balance_date LIKE '{$y}-{$m}%') ";
    $balances = $pdo -> query($sql);
    return $balances;
  }public function returnIndiBalance($y,$m,$d){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }$user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");
    $w = " WHERE (balance.user_id ={$user_id} AND (balance.balance_date LIKE '{$y}-${m}-{$d}'))";
    $sql =  "select * from balance inner join category on balance.category_id = category.category_id".$w;
    $bala = $pdo -> query($sql);
    return $bala;
  }
}
 ?>
