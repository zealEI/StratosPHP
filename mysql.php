<?php

include("header.php");



$con=mysqli_connect("192.168.92.2","root","opisaqkd","demo");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
  echo "Successfully connected to MySQL";
}

mysqli_close($con);


include("foter.php");

?>
