
<?php

 $con=mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not Connected to server';
    }
    if(!mysqli_select_db($con,'mini'))
    {
        echo 'Database not Selected';
    }

// define variables and set to empty values
$First = $email = $Last = $phone = $Address= "";
$fnameErr = $emailErr = $lnameErr = $perr = $aerr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["First"])) {
    $fnameErr = "First Name is required";
  } else {
    $name = $_POST["First"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["Last"])) {
    $lnameErr="Last Name is required";
  } else {
    $Last =$_POST["Last"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $lnameErr = "Only letters and white space allowed";    }
  }

  if(empty($_POST["Phone"])) {
    $perr="Phone number required";	
 } else {
   
	$phone=$_POST["Phone"];
	if(!preg_match("/^[0-9]*$/",$phone)){
	$perr="only numbers are allowed";
	}

 }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  
  if (empty($_POST["Address"])) {
    $aerr = "Address required";
  } else {
    $Address = $_POST["Address"];
  }

}
 $sql="INSERT INTO register (First,last,Phone,Email,Address) VALUES ('$First','$Last','$phone','$email','$Address')";
    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else{
        echo 'INSERTED';
    }
    header("refresh:2; url=loginxt.html")

?>



<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
    <title> Registration </title>
	
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
  padding: 80px; /* some padding */
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
<body>
    <button id='le' class="tablink" onclick="window.location.href='http://localhost:8383/login/index.html';" id="defaultOpen"><i class='fas fa-arrow-alt-circle-left' style='font-size:36px'></i>
        </button>
<div class="header">
     <h2>Register Form</h2>
</div>
    <br>
    <br>
    <h3 id="mar"> ENTER THE DETAILS OF THE CUSTOMER </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="max-width:500px; margin:auto">
  <div class="input-container">
   <input class="input-field" type="text" name="First" value="<?php echo $First;?>" placeholder=" First Name">
	<span class="error">* <?php echo $fnameErr;?></span>
  </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Last" value="<?php echo $Last;?>" placeholder=" Last Name">
	<span class="error">* <?php echo $lnameErr;?></span>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Phone" value="<?php echo $Phone;?>" placeholder=" Phone Number">
	<span class="error">* <?php echo $perr;?></span>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Email" value="<?php echo $Email;?>" placeholder="Email Id">
	<span class="error">* <?php echo $emailErr;?></span>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Address" value="<?php echo $Address;?>" placeholder="Address">
	<span class="error">* <?php echo $aerr;?></span>
    </div>
    
        
 <button type="submit" class="btn">Register</button>
</form>
</body>
</html>
