<?php
  function registBalance($category,$dat,$inOut,$money){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "INSERT INTO balance(user_id,category_name,in_out,money,balance_date)
            VALUES({$user_id},'{$category}',{$inOut},{$money},{$dat})
    ";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }
  function returnBalance($date){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "SELECT * FROM balance WHERE (user_id = {$user_id} AND balance_date = {$date})";
    $balances = $pdo -> query($sql);
    return $balances;
  }
 ?>
