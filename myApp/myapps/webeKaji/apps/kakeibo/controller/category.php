<?php
//カテゴリーの登録編集表示
  require_once(__DIR__."/../model/CategoriesTable.php");

  class category{
    public function set($i,$category_name){
      $db = new categoriesTable();
      //カテゴリー名の重複チェック
      $rec = $db -> getCategories($i);
      $index = array_search($category_name,array_column($rec,"category_name"));
      //重複確認
      if($index){
        //みす
          return false;
        }
        //重複なし
      else{
        if($db -> setCategory($i,$category_name) ){
          return true;
        }else{
          return false;
        }
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
