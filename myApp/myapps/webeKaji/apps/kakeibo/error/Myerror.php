<?php
  class MyError{
    public static $ErrorFlag = false;
    public function __construct($txt){
      $this -> setErrorMessage($txt);
      self::$ErrorFlag=true;
    }
    public function setErrorMessage($e){
        $this -> msg = $e;
    }
    public function getErrorMessage(){
       return $this -> msg;
    }
  }
 ?>
