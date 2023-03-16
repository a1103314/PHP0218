<?php
session_start();

$myID="a1103314";
$myPWD="aaa";

$id = $_POST["id"];
$pwd = $_POST["pwd"];
 if(($myID==$id)&&($myPWD == $pwd)){
    $_SESSION["login"]="Yes";
    header("Location:ok.php");
 }else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
 }
 
 ?>