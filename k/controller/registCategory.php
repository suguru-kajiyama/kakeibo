<?php
  require("../model/category.php");
  if( isset($_POST['addCategory']) ){
    addCategory($_POST['newCategory']);
  }
  else if(isset($_POST['removeCategory']) ){
    removeCategory($_POST['category']);
  }
  var_dump($_POST['addCategory']);
  header("Location:../view/myPage.php");
 ?>
