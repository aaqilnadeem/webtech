<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="salesman.css">;
</head>
<body>
    <div class="header">
        <h1>AMAW Bike Showroom</h1>
    </div>
<div class="flex-container">
<ul>
<li><a href="salesman_home.html">Home</a></li>
  <li class="dropdown">
    <a>Inventory</a>
    <div class="dropdown-content">
      <a href="salesman_bikes_sold_see_data.php">Bikes Sold</a>
      <!-- <a>
        <button>Bikes Sold</button> </a> -->

      
    </div>
<li><a href="salesman_register_new_bike.php">Register New Bike</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div id="newbike">
<?php
require_once 'salesman_db_conn.php';

    $sql1 = "SELECT* FROM invent WHERE sold=''";
        $result = $conn->query($sql1);
        
        if ($result->num_rows > 0) {
           
            echo "<table border=\"2\" style=\"border-collapse:collapse;\">";
            echo "<tr>";
                echo "<th>ID </th>";
                echo "<th>Bike</th>";
                echo "<th>Chasis Num</th>";
                echo "<th>Engine Num</th>";
                echo"<th>Color</th>";
                
                
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['bike'] . "</td>";
                echo "<td>" . $row['chasisnum'] . "</td>";
                echo "<td>" . $row['enginenum'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                
                
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
