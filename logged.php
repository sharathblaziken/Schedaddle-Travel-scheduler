<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
<link rel="stylesheet" type="text/css" href="normalize.css" />
<script type="text/javascript">
    function uncheckGroup(){
      console.log("Inside Function\n");
      var x = document.getElementsByName("preferences[]");
      for (var i = 0; i < x.length; i++) {
          x[i].removeAttribute("required");
      }

    }
  </script>


</head>
<body>
<img src="ny.jpg" onmouseover="this.src='paris_wide.jpg'" onmouseover="this.src='ny.jpg'" onmouseover="this.src='paris_wide.jpg'" onmouseover="this.src='opera.jpg'"/>
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
<a href="#" onclick="document.getElementById('coo').style.display='block'">
<div class="box">
<p class="box"  >Schedaddle</p>
</div>
</a>
<div id="coo">
<div class="pathr">
<form id="sch" name="sch" action="guest3.php" method="POST" >


<table width="80%" cellpadding="30px" >
<tr>
<td><width=30% height=30%></td>
</tr>
<tr colspan="80%">
<td>
<label for="City"> Select City</td>
<td ><select name="citydb" class="styled-select" required/>
<option value=""></option>
  <option value="ny">New York City</option>
  <option value="paris">Paris</option>
  <option value="chicago">Chicago</option>
  <option value="Hyderabad">Hyderabad</option>
</select>
</label>
</td>
</tr>
<tr>
<td><label>Duration of Stay</td>
<td><input class="focus"  type="text" name="duration" size=5px required/></td>
</label>
</tr>
<tr>
<td>
<label>Budget</td>
<td>
<input type="text" name="budget" size=5px required/></td>
</label>
</tr>
<div class="slideOne">
<tr>
<td>
<label>Select your Preferences</td>

<td><input type="checkbox"  name="preferences[]" value="movies" onclick="uncheckGroup()" required/><div class="hello" >Movies</div></td>

<td><input class="pathresh" type="checkbox" name="preferences[]" value="sports" onclick="uncheckGroup()" required/><div class="hello">Sports</div></td>
</tr>
<td><width=40%></td>
<td><input type="checkbox"  name="preferences[]" value="history" onclick="uncheckGroup()" required/><div class="hello" >History</div></td>

<td><input type="checkbox" name="preferences[]"  value="pub"  onclick="uncheckGroup()" required/><div class="hello">pub</div></td>
</tr>
</div>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><width="20px"></td>
<!--<td><input type="submit" value="get schedule">Get Schedule></td>-->

</tr>
</table>
<input  type="submit" value="Get Schedule">
<input type="reset" value="Reset">

</div>
</div>
</form>


</body>
</html>