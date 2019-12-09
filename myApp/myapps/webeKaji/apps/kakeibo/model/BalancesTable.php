<?php
require_once("database.php");
//収支テーブル
class BalancesTable extends Table{
  //登録
  public function setBalance($Uid,$Cid,$io,$m,$d){
    $sql = "INSERT INTO balance(user_id,category_id,in_out,money,balance_date)
            VALUES('{$Uid}','{$Cid}','{$io}','{$m}','{$d}')";
    try {
      $stmt = $this -> pdo -> prepare($sql);
      $stmt -> execute();
      return true;
    } catch (PDOException $e) {
        $dbError = new MyError();
        $dbError -> setErrorMessage("データベースへの接続ができません");
        return false;
    }
  }
  //登録の削除
  public function deleteBalance(){}
  //変更
  public function changeBalance(){}
  //月の収支を返す
  public function getOneMonthBalances($Uid,$y,$m){
    //$m<10 0埋め
    if($m<10){
      $m = "0".$m;
    }
    $sql = "SELECT * FROM balance WHERE (user_id = {$Uid} )AND (balance_date LIKE '{$y}-{$m}%')";
    $stmt = $this -> pdo -> prepare($sql);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
  }
  //日の収支を返す
  public function getOneDayBalances($Uid,$y,$m,$d){
    if($m<10){
      $m = "0".$m;
    }if($d<10){
      $d = "0".$d;
    }
    $w = " WHERE (balance.user_id ={$Uid} AND (balance.balance_date LIKE '{$y}-${m}-{$d}'))";
    $sql =  "select * from balance inner join category on balance.category_id = category.category_id".$w;
    $stmt = $this -> pdo -> prepare($sql);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
