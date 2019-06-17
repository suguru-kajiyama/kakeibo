<?php
  function regist($user_name,$pass){
    require("ConectDatabase.php");
    $sql = "INSERT INTO USERS(user_name,password) VALUES ('{$user_name}','{$pass}')";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }
 ?>
