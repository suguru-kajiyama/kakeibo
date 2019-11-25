<?php
  class MyError{
    public function setErrorMessage($e){
        $this -> msg = $e;
    }
    public function getErrorMessage(){
       return $this -> msg;
    }
  }
 ?>
