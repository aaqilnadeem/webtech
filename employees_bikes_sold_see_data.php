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
/* Change the link color on hover */
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
        <h1>AMAW Bike Showroom</h1>
    </div>
<div class="flex-container">
<ul>
  <li class="dropdown">
    <a>Inventory</a>
    <div class="dropdown-content">
      <a href="#sold">Bikes Sold</a>
      <!-- <a>
        <button>Bikes Sold</button> </a> -->
      <a href="employees_new_bikes_see_data.php">New bikes</a>
      
    </div>
<li><a href="employee_list_see_data.php">Employee List</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div id="sold">
<?php
 $host="localhost";
 $dbuser="root";
 $dbpassword="";
 $dbname="web_technologies";
  // Create connection
  $conn = new mysqli ($host, $dbuser, $dbpassword, $dbname);

  // Check connection
  if (mysqli_connect_errno())
  {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
    $sql1 = "SELECT* FROM StudentInfo";
        $result = $conn->query($sql1);
        echo"By default you're in the bikes sold section";
        if ($result->num_rows > 0) {
           
            echo "<table border=\"2\" style=\"border-collapse:collapse;\">";
            echo "<tr>";
                echo "<th>ID </th>";
                echo "<th>Name</th>";
                echo "<th>Father Name</th>";
                echo "<th>Email</th>";
                echo"<th>Gender</th>";
                
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['stdID'] . "</td>";
                echo "<td>" . $row['stdname'] . "</td>";
                echo "<td>" . $row['fathername'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobileNo'] . "</td>";
                
            echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

    $conn->close();
    ?>
</div>  
</div>
</body>
</html>
