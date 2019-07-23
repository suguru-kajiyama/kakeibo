<?php
  class showB{
    //月の全体の収支をもらう
    public function showBalance($y,$m){
      require("../model/balance.php");
      require("../model/pb.php");
      $balance = new b();
      $stm = $balance -> returnBalance($y,$m);
      $f = date("d",mktime(0,0,0,$m,1,$y) );
      $l = intval(date("d",mktime(0,0,0,$m+1,0,$y) ));
      $arr = array();
      for($i=0;$i<$l;$i++){
        $arr[] = new pb($i+1);
      }
      $arr = $this -> setArr($stm,$arr);
      for($i=0;$i<$l;$i++){
        echo "<tr>".$arr[$i] ->returnR()."</tr>";
      }
    }//特定の日付の収支をエル
    public function showIndiBalance($y,$m,$d){
      require_once("../model/balance.php");
      $balance = new b();
      $stm = $balance->returnIndiBalance($y,$m,$d);
      foreach($stm as $a){
        $io = "支出";
        if($a['in_out'] ==1){$io = "収入";}
        $c = $a["category_name"];
        $m = $a["money"];
        echo "<tr><td>{$io}</td><td>{$c}</td><td>{$m}</td></tr>";
      };
    }
    protected function setArr($a,$b){
      foreach($a as $st){
        $day = $st["balance_date"];
        $index = intval( substr($day,-2) ) -1;
        $in_out = $st["in_out"];
        $money = $st["money"];
        $b[$index] -> set($in_out,$money);
      }return $b;
    }
  }
 ?>
