<?php
  $hostname = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "chatappv1";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
