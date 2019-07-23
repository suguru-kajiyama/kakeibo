
<?php
  require_once("showB.php");
  $y="2019";$m="07";$d="10";
  if( isset($_POST["y"]) ){
    $y = $_POST["y"];
  }
  if( isset($_POST["m"]) ){
    $m = $_POST["m"];
  }
  if( isset($_POST["d"]) ){
    $d = $_POST["d"];
  }
  $sb = new showB;
  $sb -> showIndiBalance($y,$m,$d);
 ?>
