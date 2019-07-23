<?php
  class kb{
    $date;
    $inOut;
    $money;
    $category;
    $comment;
    public function __construct($d,$i,$m,$c,$tx){
      $this -> date = $d;
      if($i == 1){$this -> inOut = "収入 ";}
      else $this -> inOut = "支出";
      $this -> money = $m;
      $this -> category = $c;
      $this -> comment = $tx;
    }public function showkb(){
      $dom = "<tr>".
              "<td>{$this -> date}</td>".
              "<td>{$this -> inOut}</td>".
              "<td>{$this -> money}</td>".
              "<td>{$this -> category}</td>".
              "<td>{$this -> comment}</td>".
              "</tr>"
    }
  }
 ?>
