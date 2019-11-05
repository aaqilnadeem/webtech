<?php
$host="localhost";
 $dbuser="root";
 $dbpassword="";
 $dbname="bikeinventory";
  // Create connection
  $conn = new mysqli ($host, $dbuser, $dbpassword, $dbname);

  // Check connection
  if (mysqli_connect_errno())
  {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }


       ?>