<?php
  //収支登録
  class addBalanceData{
    public function add($d,$m,$io,$ci){
      session_start();
      $ui = $_SESSION['userId'];
      require_once(__Dir__."/../model/BalancesTable.php");
      $bt = new BalancesTable();
      if($bt -> setBalance($ui,$ci,$io,$m,$d) ){
          return true;
      }else{
        return false;
      }
    }
  }
 ?>
