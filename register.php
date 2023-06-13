<?php

  $server="localhost";
  $user="root";
  $pass="";
  $db="register";
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $obj=new mysqli($server,$user,$pass,$db);
  $str ="INSERT INTO data_list VALUES('$fname','$lname','$email','$password')";
  $obj->query($str);
  $obj->close();


  echo "<script>alert('registration successfully')</script>";



?>
<html>
<body>
<a href="registration.php">GO BACK</a>
</body>
</html>
 