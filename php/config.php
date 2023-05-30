<?php
  $conn = mysqli_connect("localhost", "root","", "chat");

  // $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connected".mysqli_connect_error();
  }
?>
