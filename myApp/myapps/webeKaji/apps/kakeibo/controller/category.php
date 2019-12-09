<?php
//カテゴリーの登録編集表示
  require_once(__DIR__."/../model/CategoriesTable.php");
  
  class category{
    public function set($i,$category_name){
      $db = new categoriesTable();

      if($db -> setCategory($i,$category_name) ){
        return true;
      }else{
        return false;
      }
    }
    public function delete($ci){
      $db = new categoriesTable();
      $db -> deleteCategory($ci);
      return true;
    }
    public function getCategory($i){
      $db = new categoriesTable();
      $rec = $db -> getCategories($i);
      return $rec;
    }
  }
 ?>
