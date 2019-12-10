<?php
session_start();
if($_SESSION)
{
  $userid = $_SESSION["id"];
}
else{
  header("Location:index.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";


$g =  $_GET["id"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
$sql = "SELECT *FROM login WHERE ID = '$userid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
 $name = $row["name"];
}} 


$sql = "SELECT *FROM register WHERE ID = '$g'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
 $rid  = $row["ID"];
 $rname = $row["First"];

 }} 


function slots1()
{
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

  $sql = "SELECT *FROM slot WHERE slot_no < 16";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$slot = $row["slot_no"];
$status = $row["status"];
?>
<input class="w3-radio" type="radio" name="slot" value="<?php echo "$slot"; ?>" <?php if(!$status) { echo ""; }else {
  echo "disabled"; 
} ?> >
<label>Slot  <?php echo $slot; ?></label>
 


<?php
}} 
}





function slots2()
{
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

  $sql = "SELECT *FROM slot WHERE slot_no > 15";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$slot = $row["slot_no"];
$status = $row["status"];
?>
<input class="w3-radio" type="radio" name="slot" value="<?php echo "$slot"; ?>" <?php if(!$status) { echo ""; }else {
  echo "disabled"; 
} ?> >
<label>Slot  <?php echo $slot; ?></label>
 


<?php
}} 
}
 
if($_POST){
 
   
  $slot = $_POST["slot"];
    $type = $_POST["type"];

  $vehicle = $_POST["vehicle"];
  if($slot <16)
  {
    $floor = 1;
  }
  else
  {
    $floor = 2;
  }
 date_default_timezone_set('Asia/Kolkata'); 
 $d=date("Y-m-d"); 
 $t =date("g:i:sa");
  
  $sql = "INSERT INTO allotment (user_id,car_no,floor,slot,date_in,time_in,time_out,type) VALUES ('$rid', '$vehicle','$floor','$slot','$d','$t','null',$type)";
                if ($conn->query($sql) === TRUE) {
                  $sql = "UPDATE slot SET status=1 WHERE slot_no=$slot";
                      if ($conn->query($sql) === TRUE) {

                      } else {
     
}
                  }
                    else
                      {
                        
                      }
  
}

 ?>


<!DOCTYPE html>
<html>
<title>Add</title>
<?php include('include/header.php')  ?>

<body class="w3-light-grey"  style="background-image:url(abc.jpg);background-size:cover;">
 

<?php include('include/sidebar.php');?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">

  <!-- Header -->
 <header class="" style="padding-top:22px">
    <h5></h5>
  </header>
  <div class="w3-margin">
    <div class="w3-row">
      <div class="w3-col s8">
        <div class="w3-container w3-white" style="padding: 16px 16px;">
          <div class="">
            <center>
            <h1 style="font-style: TimesNewRoman">Allocation </h1></center>
            <form class="" method="post">
               <label class="w3-text-grey">Customer Name</label>
                <input class="w3-input w3-border" required type="text" value="<?php echo $rname; ?>">
                 <label class="w3-text-grey">Customer Id</label>
                <input class="w3-input w3-border" required type="text" value="<?php echo $rid; ?>">
                <label class="w3-text-grey">Card Number</label>
                <input class="w3-input w3-border" required type="text" value="<?php echo $rid; ?>">
                <br>
                <label class="w3-text-grey">Vehicle Number</label>
                <input class="w3-input w3-border" type="text" required name="vehicle">
                <label class="w3-text-grey">Vehicle Type</label>
                <select class="w3-input" name="type">
                    <option class="w3-input" value="0"> 2 Wheeler</option>
                    <option class="w3-input" value="1"> 4 Wheeler</option>
                </select>
                <br>
                <label class="w3-text-grey">Floor 1 : </label><br>
                <?php slots1()  ?>
                <br><br>
                 <label class="w3-text-grey">Floor 2 : </label><br>
                <?php slots2()  ?>
                <br><br>
                <center>
                  
                <button  type="submit" value="submit" class="w3-btn w3-blue">Add</button>
                
            </form>
    </div>
  </div>
</div>
</div></div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
