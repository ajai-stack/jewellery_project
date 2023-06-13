<?php
 $server="localhost";
 $user="root";
 $pass="";
 $db="costumer_details";
 $name=$_POST['first'];
 $password=$_POST['pass'];
 
 $obj=new mysqli($server,$user,$pass,$db);
 $str ="INSERT INTO details VALUES('$name','$password')";
 $obj->query($str);
 $obj->close();

 echo "<script>alert('login successfully')</script>";
?>

<html>
<body>
<a href="login.php">GO BACK</a>
</body>
</html>
 