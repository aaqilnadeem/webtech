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
      <a href="salesman_bikes_sold_see_data.php">Bikes Sold</a>
      <!-- <a>
        <button>Bikes Sold</button> </a> -->
      <a href="salesman_new_bikes_see_data.php">New bikes</a>
      <a href="salesman_add_new_stock.php">Add New Stock</a>
      
    </div>
<li><a href="#reg">Register New Bike</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div id="reg">
<form method="POST" action="reg_db.php">
            <h3>Insert</h3>
            <table cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Bike ID</th>
                        <td><input type="text" name="bike" placeholder="Honda,Yamaha" /></td>
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
