<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript"src="../public/js/jquery.3.3.31.js">

    </script>
    <script type="text/javascript"src="../public/js/balance.js">

    </script>
    <script type="text/javascript">
      $(function(){$(".cell").on("hover",function(){
        var txt = $(this).data(rgb);
        $("#io").val(txt);
      })})</script>
    <title></title>
    <style>
      .cell{
        width:4px;
        height:4px;
        float:left;
      }#cam{
        width:512px;
        height:512px;
        float:left;
      }
    </style>
  </head>
  <body>
    <div id="cam">
    <?php
      $do = "";
      for($a=0;$a<16;$a++){
        for($b=0;$b<16;$b++){
          for($c=0;$c<16;$c++){
            $ac = 16*$a+15;
            $bc = 16*$b+15;
            $cc = 16*$c+15;
            $d = "<div class='cell'style='background-color:rgb({$ac},{$bc},{$cc})data-rgb='({$ac},{$bc},{$cc})'></div>";
            echo $d;
          }
        }
      }
     ?>
   </div>
   <input id="co"type="text" name="" value="">
  </body>
</html>
