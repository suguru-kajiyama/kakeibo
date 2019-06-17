<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h1>カテゴリー編集</h1>
    </div>
    <div class="categories">
      <form class="" action="../controller/registCategory.php" method="post">
      <?php
        require("../model/category.php");
        $r = returnUserCategory();
        foreach($r as $a){
          echo "<input type='radio' name='category' value='{$a['category_name']}'>";
          echo "{$a['category_name']}<br>";
        }
       ?>
     </br>
       <input type="text" name="newCategory" value="">
       <input type="submit" name="addCategory"value='add'>
       <input type="submit" name="removeCategory" value='remove'>
    <a href="main.php">戻る</a>
  </body>
</html>
