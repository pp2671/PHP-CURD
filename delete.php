<?php

$rollno=$_GET['rn'];

  // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

  $sql = " DELETE FROM test WHERE rollno=$rollno ";
  
  mysqli_query($conn,$sql);

  echo "$rollno Record Deleted ";
  
// Redirect browser 
header("Location: show.php"); 
  
exit; 


?>