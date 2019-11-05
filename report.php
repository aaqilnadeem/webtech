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

<div id="sell">
    <h1>Sold Bikes</h1>
<?php
require_once 'salesman_db_conn.php';
  if (mysqli_connect_errno())
  {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
    $sql1 = "SELECT* FROM invent WHERE sold='yes'";
        $result = $conn->query($sql1);
        
        if ($result->num_rows > 0) {
           
            echo "<table border=\"2\" style=\"border-collapse:collapse; margin-left: 30px;\">";
            echo "<tr>";
                echo "<th>ID </th>";
                echo "<th>Bike</th>";
                echo "<th>Chasis Num</th>";
                echo "<th>Engine Num</th>";
                echo"<th>Color</th>";
                echo"<th>Sold</th>";
                echo"<th>Date</th>";
                echo"<th>Owner</th>";
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['bike'] . "</td>";
                echo "<td>" . $row['chasisnum'] . "</td>";
                echo "<td>" . $row['enginenum'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['sold'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['owner'] . "</td>";
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