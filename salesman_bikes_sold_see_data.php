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
      <a href="#sell">Bikes Sold</a>
      <a href="salesman_new_bikes_see_data.php">New bikes</a>
      <a href="salesman_add_new_stock.php">Add New Stock</a>
      
    </div>
<li><a href="salesman_register_new_bike.php">Register New Bike</a></li>
</ul>

<div id="sell">
<?php
 require_once 'salesman_db_conn.php';
    $sql1 = "SELECT* FROM invent WHERE sold='yes'";
        $result = $conn->query($sql1);
        
        if ($result->num_rows > 0) {
           
            echo "<table border=\"2\" style=\"border-collapse:collapse;\">";
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
