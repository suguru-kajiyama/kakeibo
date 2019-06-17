<?php
$dsn = "mysql:dbname=kakeibo;host=localhost;charset=utf8";
$username = "root";
$password = "root";
$pdo = new PDO($dsn, $username, $password);
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 ?>
