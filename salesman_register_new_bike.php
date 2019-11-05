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
      <a href="salesman_new_bikes_see_data.php">New bikes</a>
      <a href="salesman_add_new_stock.php">Add New Stock</a>
      
    </div>
<li><a href="#reg">Register New Bike</a></li>

</ul>

<div id="reg">
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
<form method="POST" action="reg_db.php">
            <h3>Register New Bike</h3>
            <table cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Bike ID</th>
                        <td><input type='number' name="id" placeholder="1,2" /></td>
                    <tr>
                        <th>Date</th>
                        <td><input type='date' name="date" placeholder="1/2/3" /></td>
                    </tr>
                    <tr>
                        <th>Owner</th>
                        <td><input type="text" name="owner" placeholder="Name" /></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Register</button></td>
                    </tr>
                </table>
        </form>
</div>  
</div>
</body>
</html>
