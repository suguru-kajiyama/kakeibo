<?php
  //バリデート処理
  /*todo

    あまり使わなかった

  */
  class Validate{
    //htmlタグにならないか
    public static function htmlcheck($t){
      return isset($t);
    }//sqlチェック
    public static function sqlcheck($t){
      return isset($t);
    }//数値担っているか
    public static function numbercheck($t){
      return isset($t);
    }//date yyyymmdd系になっているか
    public static function datecheck($t){
      return isset($t);
    }
  }
 ?>
