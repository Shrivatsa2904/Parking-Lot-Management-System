<?php
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
  $e = $_POST["email"];
   

$sql = "SELECT * FROM register  WHERE Email LIKE '$e'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "User OK";
    header("Location:vehicletype.html");
} else {
    header("Location:loginxt2.php?error=not found");
}
}
$conn->close();
?>