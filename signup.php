<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
</head>
<body id="bodyimg">
<?php
include("database.php");
?>
<div id="tops">
<p id="path">SCHEDADDLE  </p>
<p id="path2">TRAVEL ROUND AND ROUND</p>
<p id="login">SIGN-UP</p>
<form action="register.php" method="post">
<table id="table2">
<tr>
<td id= "td1">Username</td>
<td><input type ="textbox" name="username" size="25" required></td>
</tr>
<tr>
<td id="td1">Password</td>
<td ><input type ="password" name="password" size="25" required></td>
</tr>
<tr>
<td id="td1">Confirm Password</td>
<td ><input type ="password1" name="password" size="25" required></td>
</tr>
<tr>
<td id="td1">Address</td>
<td ><input type ="textbox" name="address" size="30" required></td>
</tr>
<td id="td1">Phone Number</td>
<td ><input type ="textbox" name="phone" size="25" required></td>
</tr>
<tr>
<td id="td1" ><input type ="submit" name="register" value="register"></td>
<td id="td1" ><input type ="reset" name="reset" value="reset" size="40"></td>
</tr>
</table>
</form>
</body>
</html>