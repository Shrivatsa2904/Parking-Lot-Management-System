<?php 
session_start();
if($_SESSION)
{
header("Location:dashboard.php");}
else{
  
}
$error = "";
if($_GET)
{
  $error = $_GET["error"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="w3-black">
  <div class="" style="min-height: 750px; background-position: initial; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; background-image: url(&quot;https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/mrOpVKpX9rg6rhV-aYygUEcO.jpeg&quot;); border-radius: 0px;">
    <br><br><br><br><br>
    <div class="w3-center">
      <h1 class="w3-xxxlarge w3-padding w3-text-white">PARKING LOT MANAGEMENT</h1>
      <h2 class="w3-xxlarge w3-text-white"><font face="Dancing Script"><i>Park your vehicle here</i></font></h2>
      <br><br>
      <?php
      if($error)
      {
        ?>
        <p align="center" >Invalid username or password </p>
         <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-red w3-round-medium w3-text-white"> Try Again </button>

        <?php
      }  else
       {
      ?>
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-orange w3-round-medium w3-text-white"> Login </button>
<?php } ?>
    </div>

  </div>
  <div class=""><center>
    <div style="width : 500px" align="left" class="w3-padding-16">
      <p>For more than 20 years India never had car parking management. We design and produce advanced systems for management of all types of car parks offering end to end services. As each project is unique we design customized systems : entries, exits, traffic flow, guidance systems and access management for every parking project.</p> 

      <p>Parking Management includes:</p>

<p>» Entry Ticket Dispenser with Automatic Boom Barrier </p>

<p>» Decentralized payment collection system or payment at exit </p>

<p>» Exit Ticket Reader with automatic Boom Barrier </p>

<p>Benefits of Parking Management System: </p>

<p>» Enhanced Security</p>

<p>» Controlled Pilferage</p>

<p>» Reduced Operating cost</p>

<p>» Quick ROI</p>

<p>
» No conflicts of payments for number of hours parked</p>
    </div>
  </center>
  </div>
  <div class=" w3-orange"><center>
    <div style="width : 800px" align="left" class="w3-padding-32">
      <div class="w3-row-padding">
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center><i class="fa fa-key w3-jumbo w3-text-orange"></i></center>
              <br>
              <center>
              <span class="w3-large w3-text-orange"> Safe and private
</span></center>
 
<p>Your Vehicles are our vehicles. Your vehicles parked are very safely protected with advanced security system.</p>
            </div>
        </div>
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center><i class="fa fa-magic w3-jumbo w3-text-orange"></i></center>
              <br>
              <center>
              <span class="w3-large w3-text-orange"> Easy and fun

</span></center>
 
<p>We provide quick and advanced solutions for users from their entry in the parking to the exit. </p>
            </div>
        </div>
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center><i class="fa fa-life-bouy w3-jumbo w3-text-orange"></i></center>
              <br>
              <center>
              <span class="w3-large w3-text-orange"> Great service
</span></center>
 
<p class="w3-medium">The workers are very dedicated and hard working.</p>
            </div>
        </div>
         
      </div>
    </div>
  </center>
  </div>




   <div class=" w3-white"><center>
    <h1>Our employees</h1>
    <div style="width : 800px" align="left" class="w3-padding-32">
      <div class="w3-row-padding">
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center>
                <img src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/vVLhT6Oxm47b2qAbH6_VGf5Z.jpeg" width="100%">
              </center>
              <br>
              <center>
              <span class="w3-large w3-text-orange"> Shrivatsa KS</span>
              <p> Designer and Developer</p></center>
             </div>
        </div>
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center>
                <img src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/JZ4ig8Pq497PsCd4VZZC2K-A.jpeg" width="100%">
              </center>
              <br>
              <center>
              <span class="w3-large w3-text-orange"> Chinmai</span>
              <p> Designer and Developer</p></center>
             </div>
        </div>
        <div class="w3-col l4">
            <div class="w3-card w3-white w3-round w3-padding">
              <center>
                <img src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/5DnAgG_tBF9x-CM0gWAMlY4E.jpeg" width="100%">
              </center>
              <br>
              <center>
              <span class="w3-large w3-text-orange">Mahesh</span>
              <p> Designer and Developer</p></center>
             </div>
        </div>
         
        
         
      </div>
    </div>
  </center>
  </div>




  <div id="id01"  class="w3-modal w3-text-black">
    <div style="max-width: 400px;" class="w3-modal-content">
      <div class="w3-container">
        <form action="process.php" method="post"><span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p class="w3-large w3-text-orange">Login</p>
        <p class="w3-medium">Username</p>
        <input type="text" name="username" class=" w3-input w3-border" required>
        <p class="w3-medium">Password</p>
        <input type="password" name="password" class="w3-input w3-border" required>
        <br>
        <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br><br>
    <center>
        <button class="w3-btn w3-orange w3-text-white" type="submit">Login</button>
      </center>
      </form>
        <br><br>
      </div>
    </div>
  </div>

</body>
</html>