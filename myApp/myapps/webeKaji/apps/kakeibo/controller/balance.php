<?php
  require_once("../model/BalancesTable.php");

  $db = new BalancesTable();
  session_start();
  $u = $_SESSION["userId"];

  if(isset($_POST["kind"])){
    if($_POST["kind"]=="month"){
      $y = $_POST["yyyy"];
      $m = $_POST["m"];
      $rec = $db -> getOneMonthBalances($u,$y,$m);
      $dates = "";
      //jsに渡す
      //日付　種類　金,区切り
      //もっと言い渡し方あるかも
      foreach($rec as $r){
        $dates = $dates."{$r['balance_date']} {$r['in_out']} {$r['money']}".",";
      }echo $dates;
    }
  }
 ?>
