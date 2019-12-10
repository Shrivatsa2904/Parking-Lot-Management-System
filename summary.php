<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else{
  header("Location:login.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";


if($_GET)
{
  $q= $_GET["q"];
}else 
{
  $q = "";
}




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  

$sql = "SELECT *FROM login WHERE ID = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$u= $row["ID"];
$name = $row["name"];

}} 






?>
<!DOCTYPE html>
<html>
  <title>SEARCH</title>
  <?php include('include/header.php')  ?>
<body class="w3-light-grey"  style="background-image:url(abc.jpg);background-size:cover;">
  
<?php include('include/sidebar.php');?>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;">
<header class="w3-container" style="padding-top:22px">
 
</header>
  <div class="w3-margin">
    <div class="w3-row">
      <div class="w3-col s10">
        <table class="w3-table w3-striped w3-hoverable w3-bordered w3-border w3-white w3-medium" >
          <tr class="w3-blue w3-medium">
      <div class="w3-col s4">
        <div class="w3-container w3-blue">
           
           <p>Summary of any day </p>
           <form action="summ1.php" method="post">
             <input type="text" name="date" class="w3-input w3-border" placeholder="yyyy-mm-dd">
             <button type="submit" class="w3-button w3-green">Search</button>
           </form>
           <p></p>
        </div>
      </div>
    </tr>


      </div>
    <div class="w3-margin">
    <div class="w3-row"><br>
      <div class="w3-col s4" >
        <div class="w3-container w3-blue">
           
           <p>Summary</p>
           <form action="summ2.php" method="post">
             from:<input type="text" name="d1" class="w3-input w3-border" placeholder="yyyy-mm-dd">
             to:<input type="text" name="d2" class="w3-input w3-border" placeholder="yyyy-mm-dd">
             <button type="submit" class="w3-button w3-green">Search</button>
           </form>
           <p></p>
        </div>

      </div>     
</body>
</html>
