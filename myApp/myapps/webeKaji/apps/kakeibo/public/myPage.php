<?php

  if(!isset($_SESSION['userId']) ){
    session_start();
      if(!isset($_SESSION['userid'])){
        //header("Location:index.php");
      }
  }
  require_once(__DIR__."/../controller/route.php");
  require_once(__DIR__."/view/displayCategory.php");
 ?>
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
       <form class=""action="" method="post">
       <?php
          $dis = new displayCategory();
          $dis -> displayRadio($_SESSION['userId']);
        ?>
      </br>
        <input type="text" name="newCategory" value="">
        <input type="text" name="userId" value=<?php echo($_SESSION['userId']); ?>>
        <input type="submit" name="addCategory"value='add'>
        <input type="submit" name="removeCategory" value='remove'>

     <a href="mainContents.php">戻る</a>
     <?php
     if(isset($inputError)){
       echo $inputError -> getErrorMessage();
     }if(isset($nameExistError)){
       echo $nameExistError -> getErrorMessage();
     }
      ?>
   </body>
 </html>
