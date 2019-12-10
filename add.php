<?php
session_start();
if($_SESSION)
{
  $userid = $_SESSION["user_id"];
}
else{
  header("Location:login.php");
}
require_once('system/dbase.php');
$sql = "SELECT *FROM hospital WHERE id = '$userid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$u= $row["id"];
$name = $row["name"];
}} 
?>
<?php
if($_POST){
 
   
  $name = $_POST["name"];
  $address = $_POST["address"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $contact = $_POST["contact"];
  $dob = $_POST["dob"];
  $sql = "INSERT INTO patient (name,address,age,contact,gender,dob,current_h_id) VALUES ('$name', '$address',$age,'$contact','$gender','$dob','$u')";
                if ($conn->query($sql) === TRUE) {
                  header("Location:index.php");
                    }
                    else
                      {
                        echo "string";
                      }
  
}
?>


<!DOCTYPE html>
<html>
<title>Add</title>
<?php include('include/header.php')  ?>

<body class="w3-light-grey">
 

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
            <form class="" method="post">
                <label class="w3-text-grey">Name</label>
                <input class="w3-input w3-border" required type="text" name="name">
                <br>
                <label class="w3-text-grey">Address</label>
                <input class="w3-input w3-border" type="text" required name="address">
                <br>
                <label class="w3-text-grey">Age</label>
                <input class="w3-input w3-border" type="text" required name="age">
                <br>
                <label class="w3-text-grey">Gender</label>
                <input class="w3-input w3-border" type="text" required name="gender">
                <br>
                <label class="w3-text-grey">Contact Number </label>
                <input class="w3-input w3-border" type="text" required name="contact">
                <br>
                <label class="w3-text-grey">DOB (dd-mm-yyyy)</label>
                <input required class="w3-input w3-border" type="text" name="dob">
                <br>
                <button type="submit" value="submit" class="w3-btn w3-blue">Add</button>
 
            </form>
    </div>
  </div>
</div>
<div class="w3-col s4">
  <div class="w3-container w3-blue">
    <p class="w3-large"><i class="w3-text-white fa fa-medkit"></i>&nbsp;&nbsp;Add Patient</p>
    <form action="search.php" method="get">
      <label class="w3-text-grey">Have Patient Number</label>
                <input required class="w3-input w3-border" type="text" name="q">
                <br>
                <button type="submit" value="submit" class="w3-btn w3-green">Add </button>
              </form>
   
    <p></p>
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
