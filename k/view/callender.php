<?php
  function getlastdate($y,$m){
    date_default_timezone_set('Asia/Tokyo');
      //今月の0日を取得
        $ld = intval(date('d',mktime(0,0,0,$m+1,0,$y)) );
        return $ld;
        /*for($i= 1;$i<=$ld;$i++){
          echo "{$i}<br>";
        }
        //echo date('Y-m-t',mktime(0,0,0,$m,0,$y) );*/
  }
  function balanceAndDate($y,$m){
    for($i=1;$i<=getlastdate($y,$m);$i++){
      echo ba($y,$m,$i);
    }
  }
  function ba($y,$m,$d){
    return "<p>{$y}年{$m}月{$d}日</p>";
  }
  balanceAndDate(2019,6);
?>
