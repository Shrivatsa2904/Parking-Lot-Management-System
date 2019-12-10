
<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
</head>
<body>

  <form method="post" action="process.php">
      <label for="uname"><b>Username</b></label>
      <input type="text" id="name" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" id="password"  placeholder="Enter Password" name="password" required>
      <label> 
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <BR>
        
      <button type="submit" value="Login">Login</button>
      
</body>
</html>