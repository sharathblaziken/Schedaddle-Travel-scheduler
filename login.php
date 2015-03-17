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
<p id="path">LOGIN</p>
<form action="login1.php" method="POST">
<table id="table1">
<tr>
<td id= "td1">Username</td>
<td><input type ="textbox" name="username" size="25"></td>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td id="td1">Password</td>
<td ><input type ="password" name="password" size="25"></td>
</tr>


<tr >
<td>
</td>
</tr>
<tr>
<td id="td1" ><input type ="submit" name="submit" value="submit"></td>

<td id="td1" ><input type ="reset" name="reset" value="reset" size="40"></td>
</tr>

</table>
</form>

</body>
</html>