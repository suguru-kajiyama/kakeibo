<?php
  class pb{
    protected $dat;
    protected $in_money;
    protected $out_money;
    public function __construct($d){
      $this -> dat = $d;
      $this -> in_money = 0;
      $this -> out_money = 0;
    }
    public function returnR(){
      $t = 0;
      $t = $this->in_money - $this->out_money;
      return "<td class='day'>{$this->dat}</td> <td class='in'>{$this->in_money}</td> <td class='out'>{$this->out_money}</td> <td class='total'>{$t}</td>\n";
    }public function set($flag,$money){
      if($flag == -1){
        $this -> out_money += $money;
      }else if( $flag ==1){
        $this -> in_money += $money;
      }
    }
  }

 ?>
