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
  



    $First=$_POST['First'];
    $Last=$_POST['Last'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
    $Address=$_POST['Address'];

    if(strlen($phone) >11)
    {
        echo "Phone number length is more than 10 digits";
        exit;
    }

    $sql="INSERT INTO register (First,last,Phone,Email,Address) VALUES ('$First','$Last','$phone','$email','$Address')";
    if(!mysqli_query($con,$sql))
    {
       
   echo 'Enter Valid Details';
    }
    else{
          $last_id = mysqli_insert_id($con);
        echo 'INSERTED';
        header("Location:users.php");
    }

    

?>