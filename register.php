
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
    
<div class="header">
     <h2>Register Form</h2>
</div>
    <br>
    <br>
    <h3 id="mar"> ENTER THE DETAILS OF THE CUSTOMER </h3>
<form action="insert.php" method="post" style="max-width:500px; margin:auto">
  <div class="input-container">
   <input class="input-field" type="text" name="First" placeholder=" First Name" required>
  </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Last" placeholder=" Last Name" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Phone" placeholder=" Phone Number" pattern="[789][0-9]{9}" required>
    </div>
    <div class="input-container">
    <input class="input-field" type="email" name="Email"  placeholder="Enter your email" required>
    </div>
    <!---<div class="input-container">
      <input type="email" pattern=".+@gmail.com" name="Email" placeholder="Enter your email"  required>
      
    <input class="input-field" type="email"  pattern=".+@gmail.com" size="30"  name="Email" placeholder="Email Id" required>--->
    </div>
    <div class="input-container">
    <input class="input-field" type="text" name="Address" placeholder="Address" required>
    </div>
    
        
 <button type="submit" class="btn">Register</button>
</form>
</body>
</html>
