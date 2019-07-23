<?php
  $category_id=$_POST["category_id"];
  $date=$_POST["date"];
  $inOut=$_POST["inout"];
  $money=$_POST["money"];

  require("../model/balance.php");
  $ba = new b();
  $ba->registBalance($category_id,$date,$inOut,$money);

  header("Location:../view/main.php");
  exit;
 ?>
