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

                  $name = $_POST['n'];
                  $father = $_POST['fn'];
                  $email = $_POST['em'];
                  $mobile = $_POST['pn'];
                  $sql = "INSERT INTO StudentInfo(stdname, fathername, email, mobileNo)
                    Values ('$name','$father', '$email','$mobile')";
                    $x=$conn->query($sql);

if ( $x=TRUE )
{
echo "New record is inserted successfully";
}
else{
    echo "Error inserting record";
    }
    $sql1 = "SELECT* FROM StudentInfo";
        $result = $conn->query($sql1);
        
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