<?php
  function registBalance($category,$date,$inOut,$money){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }  
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "INSERT INTO balance(user_id,category_name,balance_date,in_out,money)
            VALUES({$user_id},'{$category}',{$date},{$inOut},{$money})
    ";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }
  registBalance("ぱち","2019-05-22",-1,20000);
 ?>
