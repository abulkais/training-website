<?php
  $server_name="localhost";
  $user_name="root";
  $password="";
  $database ="kvch";
  $conn =new mysqli( $server_name,$user_name,$password,$database);
  if($conn->connect_error){
      die("Connection failed: " . $con->connect_error);
  }

?>