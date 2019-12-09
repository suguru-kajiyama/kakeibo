<?php
  require_once(__DIR__."/../controller/route.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>新規登録</h1>
     <form class="" action="" method="post">
       <p>ユーザー名<input type="text" name="user_name" value=""></p>
       <p>パスワード<input type="password" name="password" value=""></p>
       <input type="submit" name="signup" value="登録する">
       <input type="submit" name="back" value="戻る">
       <?php
       if(isset($inputError)){
         echo $inputError -> getErrorMessage();
       }if(isset($nameExistError)){
         echo $nameExistError -> getErrorMessage();
       }

        ?>
     </form>
   </body>
 </html>
