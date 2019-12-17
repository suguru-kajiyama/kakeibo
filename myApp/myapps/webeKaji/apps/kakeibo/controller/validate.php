<?php
  //バリデート処理
  /*todo

    あまり使わなかった

  */
  class Validate{
    //数値になっているか
    public static function numberCheck($t){
      return ( preg_match("/^[0-9]+$/",$t) );
    }//date yyyy-mm-dd系になっているか
    public static function dateCheck($t){
      return ( preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/",$t) );
    }//password　半角英数
    public static function passwordCheck($t){
      return ( preg_match("/^[a-zA-Z0-9]+$/",$t) );
    }
    public static function nameCheck($t){
      return ( preg_match("/^[a-zA-Z0-9ぁ-んーァ-ヶー一-龠]+$/",$t) );
    }
  }
 ?>
