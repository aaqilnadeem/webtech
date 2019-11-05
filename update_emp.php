<!DOCTYPE html>
<html>
<head>
<style>
    .flex-container{
        display: flex;
        flex-flow: row wrap;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  height: 1000px;
}
li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #555;
  color: white;
}
li.dropdown {
  display: block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {
  display: block;
}
.header{
align-content: center;
align-items: center;
 background-color:firebrick;
 height: 70px;
  text-align: center;
}
</style>
</head>
<body>
    <div class="header">
    <a href="ad_home.php" style="color: black;text-decoration: none;"><h1>AMAW Bike Showroom</h1></a>
    </div>
<div class="flex-container">
<ul>
  <li class="dropdown">
    <a>Employee</a>
    <div class="dropdown-content">
      <a href="e_register.php">Resgistration</a>
      <a href="e_update.php">Update</a>
      <a href="e_delete.php">Delete</a>
    </div>
</li>
<li><a href="add_stock.php">Add Stock</a></li>
<li><a href="report.php">Report</a></li>
<li><a href="#contact">Show System</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div class="disp">
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

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        $sql1 =  "UPDATE logindata SET firstname='$firstname', lastname='$lastname', username='$username', password='$password'
        WHERE id='$id'";
        
        if ($conn->query($sql1) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    $conn->close();
    ?>
</div>  
</div>
</body>
</html>
