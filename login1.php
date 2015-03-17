<?php
session_start();
include("database.php");
if(!isset($_COOKIE['ucook'])){
$correct=false;
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$sqll="SELECT * FROM `users`";
$result=mysql_query($sqll,$con);
while($temp=mysql_fetch_array($result)){
if($temp['username']==$username){
if($temp['password']==$password){
$correct=true;
$_SESSION['ID']=$temp['ID'];
break;

}
}
}

if(!$correct)
{
 header('Location:guest2.php');
}
}
else
{
 $result = mysqli_query($con,"SELECT * FROM users where ID=".$_COOKIE['ucook']);
 $temp = mysqli_fetch_array($result);
}
?>