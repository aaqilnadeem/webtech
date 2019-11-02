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
           <label > Name: </label><input type="text" name="n" ><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Father Name: <input type="text" name="fn"><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: <input type="text" name="em"><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone No.: <input type="text" name="pn"><br><br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="Enter" value="insert">
        </form>
</div>  
</div>
</body>
</html>
