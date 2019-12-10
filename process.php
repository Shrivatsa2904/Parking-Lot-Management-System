<?php
session_start();
if($_SESSION)
{
header("Location:dashboard.php");}
else{
  
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
  $u = $_POST["username"];
  $p = $_POST["password"];
   

$sql = "SELECT * FROM login  WHERE name LIKE '$u' AND password LIKE '$p'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

	$id = $row["ID"];
    // output data of each row
    echo "login okay";
     $_SESSION["id"] = $id;
    header("Location:dashboard.php");
}
} else {
    header("Location:index.php?error=not found");
}
}
$conn->close();
?>