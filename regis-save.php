<?php
 session_start();
$login = $_POST['login'];
$passwd =$_POST['pwd'];

$conn=new PDO("mysql:host=localhost;dbname=test_login;charset=utf8","root","");
$sql="INSERT INTO menber (name, password) VALUE ('$login','$passwd')";
$conn->exec($sql);
header("location:login.php");
die();
?>