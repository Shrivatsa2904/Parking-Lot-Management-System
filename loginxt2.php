<?php 
$er = "";
if($_GET)
{
  $er = $_GET["error"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Parking</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
.inut[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.inut[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.inut[type=submit]:hover {
  background-color: #45a049;
}
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  background-color :#000000;
}
.form {
	margin: 0 auto;
	width: 250px;
}
.form label{
	display: inline-block;
	text-align: right;
	float: left;
}
.form input{
	display: inline-block;
	text-align: left;
	float: right;
}
.btn {
  background-color: #FF6800;
  color: white;
  padding: 10px;
  margin: 8px 0;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
#a {

	float:right;
}
</style>
</head>
<body>


 <button id='le' class="tablink" onclick="goback()" id="defaultOpen">
	<i class='fas fa-arrow-alt-circle-left' style='font-size:36px'></i>
 </button>

<script>
function goBack() {
  window.history.back();
}
</script>
<div class="header">
</div>
<div class="tab">
  <button class="tablinks" onclick=location.href='register.html';>New User</button>
  <button class="tablinks" onclick="openCity(event, 'Old User')">Old User</button>
  <button class="tablinks" id="a" onclick=location.href='front2.php'>Logout</button>
  <button class="tablinks" id="a" onclick=location.href='#'>checkout</button>


</div>
<div id="Old User" class="tabcontent">
  <div class="form">
  <p style="color:white;" align="center">Enter your email</p>
  </div>
  <form action="verify.php" method="post">
  <p align="center">
  <input type="text" class="inut" placeholder="someone@gmail.com" name="email">
  </p>
  <p align="center">
  <input type="submit" value="OK" class="btn">
  </p>
</form>
</div>
<p style="font-size: 30px;">
    <?php

    if($er)
    {
       echo $er;
    }
    ?> </p>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
