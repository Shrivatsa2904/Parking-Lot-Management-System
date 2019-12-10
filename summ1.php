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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if($_POST)
{
	$d=$_POST["date"];
}

$sql = "SELECT *FROM login WHERE ID = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$u= $row["ID"];
$name = $row["name"];

}} 

$tot=0;

$sql="SELECT * FROM delogs WHERE date_out='$d'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {

	$tot+=$row["amount"];

	}
}




?>
<!DOCTYPE html>
<html>
  <title>SEARCH</title>
  <?php include('include/header.php')  ?>
  <style>


div.absolute {
  position: absolute;
  top: 80px;
  right: 100px;

  width: 990px;
  height: 100px;
  border: 2px solid black;
}
  </style>
<body class="w3-light-grey"  style="background-image:url(abc.jpg);background-size:cover;">
  

<?php include('include/sidebar.php');?>

        <div class="absolute">

<h2>
<p> Total amount Collected on <?php echo " ",$d," is : "; echo $tot," Rupees";  ?>
</p>
</h2>
</div>
</div>

</body>
</html>