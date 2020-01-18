<?php
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['pass']=$_POST['pass'];
header('location:etelaat_shakhsi.php');
?>