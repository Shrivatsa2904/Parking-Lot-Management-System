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
$dbname = "shru";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  

$sql = "SELECT *FROM admin WHERE ID = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
while($row = $result->fetch_assoc()) {
$u= $row["ID"];
$name = $row["username"];

}} 

?>
<!DOCTYPE html>
<html>
  <title>Clients</title>
  <?php include('include/header.php')  ?>
<body class="w3-light-grey" style="background-image:url(abc.jpg);background-size:cover;">
  
<?php include('include/sidebar.php');?>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;">
<header class="w3-container" style="padding-top:22px">
 
</header>
  <div class="w3-margin">
    <div class="w3-row">
      <div class="w3-col s8">
        <table class="w3-table w3-striped w3-hoverable w3-bordered w3-border w3-white w3-medium" >
          <tr class="w3-blue w3-medium">
            <td>Client ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>View Details</td>
            <td>Delete Client</td>
           
          </tr>
          <?php  $sql ="SELECT * FROM client";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {  
              while($row = $result->fetch_assoc()) {
                $cid = $row["client_id"];
                $name = $row["name"];
                $phone = $row["phone"];

                  ?>
          <tr>
            <td><?php echo $cid; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $phone; ?></td>
            <td>
              <a href="detailsc.php?id=<?php echo $rid; ?>" style="" class=""><i class="fa fa-external-link-square"></i>&nbsp;View</a>    
            </td>
             <td>
              <a href="remove.php?id=<?php echo $rid; ?>" style="" class=""><i class="fa fa-external-link-square"></i>&nbsp;Delete</a>    
            </td>

          </tr>
          <?php }} ?>
          
        </table>
      </div>
      <div class="w3-col s4">
        <div class="w3-container w3-blue">
           
           <p>Connected Database </p>
           <form action="search.php" method="get">
             <input type="text" name="q" class="w3-input w3-border" placeholder="Id Number">
             <button type="submit" class="w3-button w3-green">Search</button>
           </form>
           <p></p>
        </div>
      </div>
  </div>
</div>
</div>
<script>
var mySidebar = document.getElementById("mySidebar");

var overlayBg = document.getElementById("myOverlay");

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
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Lucknow</p>
      </div>
    </div>
  </div>

</body>
</html>
