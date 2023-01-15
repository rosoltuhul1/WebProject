<?php
//$mysql_host='localhost';
//$mysql_user='root';
//$mysql_password='rosolSARAH123';
//mysqli_connect($mysql_host,$mysql_user,$mysql_password);
//$conn=new PDO($mysql_host,$mysql_user,$mysql_password);

$db_name = 'mysql:host=localhost;dbname=mysystem';
$user_name = 'root';
$user_password = 'rosolSARAH123';
$conn = new PDO($db_name, $user_name, $user_password);


?>