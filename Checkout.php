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
  

$sql = "SELECT *FROM login WHERE ID = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$u= $row["ID"];
$name = $row["name"];

date_default_timezone_set('Asia/Kolkata');
$d =date("g:i:sa");
$od=date("Y-m-d");



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
      


$sql="SELECT * FROM allotment WHERE user_id ='$q'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
  $date=$row["date_in"];
  $slot=$row["slot"];
$intime= strtotime($row["time_in"]);
$in=date("g:i:s",($intime));
$outime=strtotime($d);
$o=date("g:i:s",($outime));
//echo $intime,"<br>";
//echo $outime,"<br>";

$endtime=$outime-$intime;

 
//echo $endtime,"<br>";

$tot=date("H:i:s",($endtime));
//echo $tot,"<br>";
 $sql="CALL `ins`($tot);";
      $conn->query($sql);

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


}} }}

//$sql="INSERT INTO delogs (date_out,amount) values ('$od','$price')";
//$result=$conn->query($sql);
            $sql="CALL `update`($price);";
            $conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
    <title> Checkout </title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.header {
  padding: 0px; /* some padding */
  text-align: center; /* center the text */
  background-image: url("https://www.theglobeandmail.com/resizer/NtDW6HpctASDgd1GK9Z0buU9sYA=/3500x0/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/ZMXGWDNNKRFPTBC4K224VDXJ5U.jpg");
  background-size: 1920px;
  background-repeat: no-repeat;
  background-position: center;
  margin: 0PX;
   color:#;
   
}
#idol{
    color:#2e4053;
}
#mar {
    text-align: center;
}
#le {
    
    margin-top: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    background : transparent;
    float: left;
    color: black;
 }
</style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body  style="background-image:url(abc.jpg);background-size:cover;">
    <!---<button id='le' class="tablink" onclick="window.location.href='http://localhost:8383/login/index.html';" id="defaultOpen"><i class='fas fa-arrow-alt-circle-left' style='font-size:36px'></i>
        </button>--->
<div class="header">
     <h2></h2>
</div>
    <br>
    <br>
    <h3 id="mar">CHECKOUT  </h3>
<form action="bill.php?id=<?php echo $id; ?>" method="post" style="max-width:500px; margin:auto">
  <div class="input-container">
   <label class="input-field"><b>ID:</b></label>
   <input class="input-field" type="text" name="First"  value="<?php echo $id;  ?>">
  </div>
    <div class="input-container">
      <label class="input-field"><b>Name:</b></label>
    <input class="input-field" type="text" name="Last" value="<?php echo $name;  ?>">
    </div>
    <div class="input-container">
      <label class="input-field"><b>Email:</b></label>
    <input class="input-field" type="text" name="Phone"   value="<?php echo $email;  ?>">
    </div>
    <div class="input-container">
      <label class="input-field"><b>Phone:</b></label>
    <input class="input-field" type="text" name="Email"  value="<?php echo $phone;  ?>">
    </div>
    <div class="input-container">
      <label class="input-field"><b>Time In:</b></label>
    <input class="input-field" type="text" name="Address" value="<?php echo $date," "; echo $in;  ?>">
    </div>
    <div class="input-container">
      <label class="input-field"><b>Time Out:</b></label>
    <input class="input-field" type="text" name="Address" value="<?php echo $od," "; echo $o;  ?>">
    </div>
    <!---<div class="input-container">
      <label class="input-field"><b>Total Time:</b></label>
    <input class="input-field" type="text" name="Address" value="<?php echo $tot;  ?>">
    </div>--->
    <div class="input-container">
      <label class="input-field"><b>Amount:</b></label>
    <input class="input-field" type="text" name="Address" value="<?php echo $price," Rupees";  ?>">
    </div>
    
        
 <button type="submit" class="btn">Pay</button>
</form>
</body>
</html>
