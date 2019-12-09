<?php
require_once("database.php");
//カテゴリーテーブル
class CategoriesTable extends Table{
  //登録
  public function setCategory($i,$n){
    $sql = "INSERT INTO category(user_id,category_name)
            VALUES('{$i}','{$n}')";
    try{
      $stmt = $this -> pdo -> prepare($sql);
      $stmt -> execute();
      return true;
    }catch(PDOException $e){
      $dbError = new MyError();
      $dbError -> setErrorMessage("データベースへの接続ができません");
      return false;
    }

    //return $stmt -> fetchAll(PDO::FETCH_ASSOC);
  }
  //削除
  public function deleteCategory($id){
    $sql = "UPDATE category set deleteFlag = 1 WHERE category_id = {$id}";
    try{
      $stmt = $this -> pdo -> prepare($sql);
      $stmt -> execute();
    }catch(PDOException $e){
      $dbError = new MyError();
      $dbError -> setErrorMessage("データベースへの接続ができません");
    }
  }
  //変更
  public function changeCategory($key,$val,$id){
    $sql = "UPDATE category set {$key} = {$val} WHERE category_id = {$id}";
    try{
      $stmt = $this -> pdo -> prepare($sql);
      $stmt -> execute();
    }catch(PDOException $e){
      $dbError = new MyError();
      $dbError -> setErrorMessage("データベースへの接続ができません");
    }
  }
  //カテゴリー名を返す
  public function getCategories($i){
    $sql = "SELECT * FROM category WHERE(user_id='{$i}') AND deleteFlag = 0";
    try{
      $stmt = $this -> pdo -> prepare($sql);
      $stmt -> execute();
      $rec = $stmt -> fetchAll(PDO::FETCH_ASSOC);
      return $rec;
    }catch(PDOException $e){
      $dbError = new MyError();
      $dbError -> setErrorMessage("データベースへの接続ができません");
      return false;
    }
  }
}
 ?>
