<?php
  require("../model/balance.php");
  $a = returnBalance("20190617");
  foreach($a as $b){
    echo $a['money']."<br>";
  }
 ?>
