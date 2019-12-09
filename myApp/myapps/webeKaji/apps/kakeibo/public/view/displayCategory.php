<?php
  require_once(__DIR__."/../../controller/category.php");
  class displayCategory{
    public function displayRadio($i){
      $t = new category();
      $recs = $t -> getCategory($i);
      $i=0;
      foreach($recs as $r){
        $txt="";
        if($i++==0){
          $txt="checked";
        }
        $i++;
        echo "<input type='radio' name='category_id' value='{$r['category_id']}'{$txt}>";
        $category_name = htmlspecialchars($r['category_name']);
        echo "{$category_name}<br>";
      }
    }
  }
 ?>
