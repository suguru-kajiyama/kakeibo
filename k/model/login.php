<?php
$rec =null;
function login($a,$b){
  require("ConectDatabase.php");
  $sql = "SELECT * FROM USERS WHERE(user_name='{$a}' AND password='{$b}')";
  $stmt = $pdo -> prepare($sql);
  $stmt -> execute();
  $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
  return $rec;
}
?>
