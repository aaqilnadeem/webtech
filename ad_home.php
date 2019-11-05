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
.flex-container>#disp> #dispin{
  display:flex;
  flex-flow:column wrap;
  margin:30px 30px;
}
.flex-container>#disp> #dispin>div{
  
  margin-left:30px;
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

<div id="disp">
    <h1>Welcome to AMAW</h1>
    <div id="dispin">
      <div>
      <a href="e_register.php">
      <img src="icon\icons8-cute-color-64.png" alt="Add Icon">
      <h3>Add Employee</h3>
      </a>
      </div>
      <div>
      <a href="e_update.php">
      <img src="icon\icons8-edit-property-64.png" alt="Update Icon">
      <h3>Update Employee</h3>
      </a>
      </div>
      <div>
      <a href="e_delete.php">
      <img src="icon\icons8-delete-document-64.png" alt="Delete Icon">
      <h3>Delete Employee</h3>
      </a>
      </div>
      <div>
      <a href="report.php">
      <img src="icon\icons8-report-card-64.png" alt="report Icon">
      <h3>Report</h3>
      </a>
      </div>
    </div>
</div>  
</div>
</body>
</html>