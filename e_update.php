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
input[type=text],input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    input[type=number]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
input[type=submit] {
    width: 100%;
    background-color: firebrick;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #e26969;
}

.disp {
    border-radius: 5px;
    /* background-color: #f2f2f2; */
    padding: 40px;
    width: 350px;
    /* margin: 100px 400px; */
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
    <h1>Update</h1>
   
    <form action="update_emp.php" method="POST">
        <table>
            <tr>
                <th>ID</th>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                    <th>last Name:</th>
                    <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                    <th>Username:</th>
                    <td><input type="text" name="username"></td>
            </tr>
            <tr>
                    <th>password</th>
                    <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>

</div>  
</div>
</body>
</html>