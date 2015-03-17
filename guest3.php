


    


<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
<link rel="stylesheet" type="text/css" href="normalize.css" />
</head>
<body>
<img src="ny.jpg" onmouseover="this.src='paris.jpg'" onmouseover="this.src='ny.jpg'" onmouseover="this.src='paris.jpg'" onmouseover="this.src='opera.jpg'"/>
<div class="text">
<p class="small">Enjoy your trip</p>
</div>
<div class="text1">
<p class="small">Within Budget</p>
</div>
<div class="text3">
<p class="small">Your Preferences</p>
</div>
<div class="text4">
<p class="small">Your duration</p>
</div>
<div ID="schedule">


 <?php 
    $citydb = $_REQUEST["citydb"];
    $duration = $_REQUEST["duration"];
    $budget = $_REQUEST["budget"]; 
    
	  
    
	
	
    //connecting to DB
    define ("DB_HOST", "localhost"); // set database host
	  define ("DB_USER", "root"); // set database user
	  define ("DB_PASS",""); // set database password
    define ("DB_NAME", $citydb); // set database name
    function connect(){
	  $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
	  $db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

	return $link;
	  }
    $link = connect();
	$countex9="SELECT COUNT(*) AS `number9` FROM `lodges`";
	$countex11="SELECT COUNT(*) AS `number11` FROM `hotels`";
	$countex12="SELECT COUNT(*) AS `number12` FROM `mpreferences`";
	$countex3="SELECT COUNT(*) AS `number3` FROM `ahotels`";
	$countex6="SELECT COUNT(*) AS `number6` FROM `npreferences`";
	$countex10="SELECT COUNT(*) AS `number10` FROM `nhotels`";
	
	$query9=mysql_query($countex9,$link);
	$query11=mysql_query($countex11,$link);
	$query12=mysql_query($countex12,$link);
	$query3=mysql_query($countex3,$link);
	$query6=mysql_query($countex6,$link);
	$query10=mysql_query($countex10,$link);
	while ($temp9 = mysql_fetch_array($query9)) {
	$lodges["number9"] = $temp9["number9"];
	}
	while ($temp11 = mysql_fetch_array($query11)) {
	$hotels["number11"] = $temp11["number11"];
	}
	while ($temp12 = mysql_fetch_array($query12)) {
	$mpreferences["number12"] = $temp12["number12"];
	}
	while ($temp3 = mysql_fetch_array($query3)) {
	$ahotels["number3"] = $temp3["number3"];
	}
	while ($temp6 = mysql_fetch_array($query6)) {
	$npreferences["number6"] = $temp6["number6"];
	}
	while ($temp10 = mysql_fetch_array($query10)) {
	$nhotels["number10"] = $temp10["number10"];
	}
	$f=0;
	for($num=1;$num<=$mpreferences["number12"];$num++){
	 $sql="SELECT * FROM `mpreferences` WHERE `ID`=$num";
	  $querys = mysql_query($sql,$link);
	  while($temp=mysql_fetch_array($querys)){
	  $mpreferences["ID"]=$temp["ID"];
	  $mpreferences["comments"]=$temp["comments"];	  	  
	  }
	  
	  foreach($_REQUEST["preferences"] as $preferences){
	  if($preferences==$mpreferences["comments"]){
	  
	 $localids[$f++]=$mpreferences["ID"];
	  
	  }
	  } 
	  
	  } 
	  $g=0;
	for($gum=1;$gum<=$npreferences["number6"];$gum++){
	 $sql="SELECT * FROM `npreferences` WHERE `ID`=$gum";
	  $querys = mysql_query($sql,$link);
	  while($temp=mysql_fetch_array($querys)){
	  $npreferences["ID"]=$temp["ID"];
	  $npreferences["comments"]=$temp["comments"];	  	  
	  }
	  
	  foreach($_REQUEST["preferences"] as $preferences){
	  if($preferences==$npreferences["comments"]){
	  
	 $elocalids[$g++]=$npreferences["ID"];
	  
	  }
	  } 
	  
	  } 
	  
	  
      
    do
    {
      $rand11 = rand(1,$hotels["number11"]);
      $rand9 = rand(1,$lodges["number9"]);
	  $rand3 = rand(1,$ahotels["number3"]);
	  $rand6=$elocalids[rand(0,(sizeof($elocalids)-1))];
	  $rand10 = rand(1,$nhotels["number10"]);
	  $rand12=$localids[rand(0,(sizeof($localids)-1))];     
	  
      $sql = "SELECT * FROM `lodges` WHERE `ID`= $rand9";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        $lodges["name"] = $temp["name"];
        $lodges["address"] = $temp["address"];
        $lodges["budget"] = $temp["budget"];
		$lodges["comments"]=$temp["comments"];
		
      }
      $sql = "SELECT * FROM `hotels` WHERE `ID`= $rand11";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        //check for prefernces
        $hotels["name"] = $temp["name"];
        $hotels["address"] = $temp["address"];
        $hotels["budget"] = $temp["budget"];
		$hotels["comments"]=$temp["comments"];
		
		
      }
	  $sql = "SELECT * FROM `mpreferences` WHERE `ID`= $rand12";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        //check for prefernces
        $mpreferences["name"] = $temp["name"];
        $mpreferences["address"] = $temp["address"];
        $mpreferences["budget"] = $temp["budget"];
		$mpreferences["comments"]=$temp["comments"];
		
		}
		$sql = "SELECT * FROM `ahotels` WHERE `ID`= $rand3";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        //check for prefernces
        $ahotels["name"] = $temp["name"];
        $ahotels["address"] = $temp["address"];
        $ahotels["budget"] = $temp["budget"];
		$ahotels["comments"]=$temp["comments"];
		
		}
		$sql = "SELECT * FROM `npreferences` WHERE `ID`= $rand6";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        //check for prefernces
        $npreferences["name"] = $temp["name"];
        $npreferences["address"] = $temp["address"];
        $npreferences["budget"] = $temp["budget"];
		$npreferences["comments"]=$temp["comments"];
		
		}
		$sql = "SELECT * FROM `nhotels` WHERE `ID`= $rand10";
      $query = mysql_query($sql,$link);
      while ($temp = mysql_fetch_array($query)) {
        //check for prefernces
        $nhotels["name"] = $temp["name"];
        $nhotels["address"] = $temp["address"];
        $nhotels["budget"] = $temp["budget"];
		$nhotels["comments"] = $temp["comments"];
		
		
		}
      
    }while(($lodges["budget"]+$hotels["budget"]+$mpreferences["budget"]+$ahotels["budget"]+$npreferences["budget"]+$nhotels["budget"])>$budget);
	
    ?>
<form action="pdf.php" method="post">
<table  height="70%" name="hey" ID="hey" align="center" border=3>
<tr>
<th>TIME</th>
<th>NAME</th>
<th>address</th>
<th>BUDGET</th>
<th>TAG LINE</th>
<th>MAP</th>



<tr>
<td><center>9 A.M  (Check in)</center></td>
<td><?= $lodges["name"] ?></td>
<td><?= $lodges["address"] ?></td>
<td><?= $lodges["budget"] ?></td>
<td><?= $lodges["comments"]?></td>


</tr>
<tr>
<td><center>11 A.M</center></td>
<td><?= $hotels["name"] ?></td>
<td><?= $hotels["address"] ?></td>
<td><?= $hotels["budget"] ?></td>
<td><?= $hotels["comments"] ?></td>


</tr>
<tr>
<td><center>12 P.M</center></td>
<td><?= $mpreferences["name"] ?></td>
<td><?= $mpreferences["address"] ?></td>
<td><?= $mpreferences["budget"] ?></td>
<td><?= $mpreferences["comments"] ?></td>




</tr>

<tr>
<td>3 P.M</td>
<td><?= $ahotels["name"] ?></td>
<td><?= $ahotels["address"] ?></td>
<td><?= $ahotels["budget"] ?></td>
<td><?= $ahotels["comments"] ?></td>


</tr>
<tr>
<td>6 P.M</td>
<td><?= $npreferences["name"] ?></td>
<td><?= $npreferences["address"] ?></td>
<td><?= $npreferences["budget"] ?></td>
<td><?= $npreferences["comments"] ?></td>


</tr>
<tr>
<td>10 P.M</td>
<td><?= $nhotels["name"] ?></td>
<td><?= $nhotels["address"] ?></td>
<td><?= $nhotels["budget"] ?></td>
<td><?= $nhotels["comments"] ?></td>


</tr>
<tr>
<td>11 P.M (Get back to Hotel)</td>
<td><?= $lodges["name"] ?></td>
<td><?= $lodges["address"] ?></td>
<td>TOTAL <?= $lodges["budget"]+$hotels["budget"]+$mpreferences["budget"]+$ahotels["budget"]+$npreferences["budget"]+$nhotels["budget"] ?>$</td>
<td><?= $lodges["comments"]?></td>


</table>

<input type="submit" name="submit" value="Save schedule">




</form>
</div>


</body>
</html>


