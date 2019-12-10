<?php
session_start();
if($_SESSION)
{
  $id = $_SESSION["id"];
}
else
{
  header("Location:dashboard.php"); 
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";


if($_GET)
{
  $q= $_GET["id"];
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
  
date_default_timezone_set('Asia/Kolkata');

$d =date("g:i:sa");
$od=date("d-m-Y");



$sql="SELECT * FROM register WHERE ID ='$q'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{  
  while($row = $result->fetch_assoc()) 
    {
        
        $id=$row["ID"];
        $name=$row["First"];
        $email=$row["Email"];
        $phone=$row["Phone"];
    }
  }
      
$od=date("d-m-Y");

$sql="SELECT * FROM allotment WHERE user_id ='$q'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$ind=$row["date_in"];
$slot=$row["slot"];
$intime= strtotime($row["time_in"]);
$in=date("H:i:s",($intime));
$outime=strtotime($d);
$o=date("H:i:s",($outime));
//echo $intime,"<br>";
//echo $outime,"<br>";

$endtime=$outime-$intime;


//echo $endtime,"<br>";

$tot=date("H:i:s",($endtime));
//echo $tot,"<br>";

switch ($tot) {
    
    case 1:
       $price=20;
        break;
    case 2:
        $price=20;
        break;
    case 3:
        $price=30;
        break;
    case 4:
        $price=30;
        break;
    case 5:
        $price=40;
        break;
    case 6:
       $price=40;
        break;
    case 7:
        $price=50;
        break;
    case 8:
        $price=50;
        break;
    case 9:
        $price=60;
        break;
    case 10:
       $price=60;
        break;
    case 11:
        $price=70;
        break;
    case 12:
        $price=70;
        break;
}
// echo $price;
}} 



$sql="UPDATE slot SET status=0 WHERE slot_no='$slot'";
$result = $conn->query($sql);
$sql = "DELETE FROM allotment WHERE user_id = '$id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #FF6800;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 86%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.bck
{
  background-image: url("pic.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
.Center { 
            width:130px; 
            height:35px; 
            position: fixed; 
           
            top: 30%; 
            left: 90%; 
            margin-top: -100px; 
            margin-left: -100px; 
        } 
        .Center1 { 
            width:130px; 
            height:35px; 
            position: fixed; 
            color:white;
            top: 20%; 
            left: 90%; 
            margin-top: -50px; 
            margin-left: -95px; 
        } 

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.header {
  padding: 100px; /* some padding */
  text-align: center; /* center the text */
  background-image: url("https://www.theglobeandmail.com/resizer/NtDW6HpctASDgd1GK9Z0buU9sYA=/3500x0/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/ZMXGWDNNKRFPTBC4K224VDXJ5U.jpg");
  background-size: 1920px;
  background-repeat: no-repeat;
  background-position: center;
  margin: 0PX;
   color:#;
</style>

</head>
<body class="bck" onload="startTime()">
<div  style="width: 550px; float:left; height:550px; background:white; margin:5px;">

  <div style="width: 540px; height: 540px; border: 2px solid black; padding: 0px; margin: 5px;">
  <h1 align="center">Park Easy</h1>
  <p align="center">Parking lot reciept</p>
    <div style="width: 525px; height: 410px; border: 2px solid black; padding: 0px; margin: 5px;">
    <h2 align="center">Entry Date and Time:</h2>
       <p align="center"><?php echo $ind," "; echo $in; ?></p>
    <h2 align="center">Exit Date and Time:</h2>
        <p align="center"><?php echo $od," "; echo $o; ?></p>
      <div>
        <p id="demo" align="center"></p>
      </div>
    <h2 align="center">Total Price:</h2>
    <p align="center"><?php echo $price," Rupees"; ?></p>
    <h2 align="center">Thank You</h2>
    <h3 align="center">Come back soon</h3>
    </div>
  </div>
</div>

<button onclick="myFunction()" class="Center">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>
</div>

<a href="dashboard.php" class="Center1" >Home</a>

<!---<script>
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
document.getElementById('demo').innerHTML=h+":"+m+":"+s;
</script>--->
</body>
</html>
