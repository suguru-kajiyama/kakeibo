<?php
session_start();
// セッション開始
// セッション変数を全て削除
$_SESSION = array();

header("Location:../index.php");
 ?>
