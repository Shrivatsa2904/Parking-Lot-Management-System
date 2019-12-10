<?php
session_start();
if($_SESSION)
{
  $userid = $_SESSION["id"];
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

 $gid = $_GET["id"];

$sql = "DELETE FROM `register` WHERE ID = '$gid'";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    header("Location:eroro.php");
}

?>