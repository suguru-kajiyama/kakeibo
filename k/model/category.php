<?php
  function returnUserCategory(){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "SELECT * FROM category WHERE (user_id = {$user_id})";
    $categories = $pdo -> query($sql);
    return $categories;
  }
  function addCategory($categoryName){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION["user_id"];
    require("ConectDatabase.php");

    $sql = "INSERT INTO category (category_name,user_id) VALUES('{$categoryName}',{$user_id})";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }
  function removeCategory($categoryName){
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
    $user_id = $_SESSION['user_id'];
    require("ConectDatabase.php");

    $sql = "DELETE FROM category WHERE category_name = '{$categoryName}' AND user_id = {$user_id}";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    $pdo = null;
  }function addCategoryAtFirst($id){
    addCategory("雑貨");
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }$_SESSION["user_id"] = $id;
  }
?>
