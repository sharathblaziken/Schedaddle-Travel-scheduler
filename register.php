<?php
include("signup.php");
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone"];
$sql="INSERT INTO `users` (`ID`,`username`,`password`,`address`,`phone`) VALUES ('NULL','$username','$password','$address','$phone')";
if(mysql_query($sql,$con)){
header('Location:guest2.php');

}
?>