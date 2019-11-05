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
      <a href="#stock">Add New Stock</a>
      
    </div>
<li><a href="salesman_register_new_bike.php">Register New Bike</a></li>

</ul>

<div id="stock">
<form method="POST" action="stock_db.php">
            <h3>ADD STOCK</h3>
            <table cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Bike Brand</th>
                        <td><input type="text" name="bike" placeholder="Honda,Yamaha" /></td>
                    </tr>
                    <tr>
                        <th>Chasis Number</th>
                        <td><input type="text" name="chasisnum" placeholder="1234567" /></td>
                    </tr>
                    <tr>
                        <th>Engine Number</th>
                        <td><input type="text" name="enginenum" placeholder="9876543" /></td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td><input type="text" name="color" placeholder="Red,Black" /></td>
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
