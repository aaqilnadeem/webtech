<?php
 $host="localhost";
 $dbuser="root";
 $dbpassword="";
 $dbname="bikeinventory";
  // Create connection
  $conn = new mysqli ($host, $dbuser, $dbpassword, $dbname);

  // Check connection
  if (mysqli_connect_errno())
  {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }

                  $bike = $_POST['bike'];
                  $date = $_POST['date'];
                  $owner = $_POST['owner'];
                  $sold='yes';
                  $sql="UPDATE invent SET date=$date,owner=$owner, sold=$sold WHERE id=$bike";
                //   $sql = "INSERT INTO invent(date, owner) WHERE id=
                //     Values ('$date','$owner','$sold')";
                    $x=$conn->query($sql);

if ( $x=TRUE )
{
echo "New record is inserted successfully";
}
else{
    echo "Error inserting record";
    }
    // $sql1 = "SELECT* FROM invent WHERE sold='no'";
    //     $result = $conn->query($sql1);
        
    //     if ($result->num_rows > 0) {
           
    //         echo "<table border=\"2\" style=\"border-collapse:collapse;\">";
    //         echo "<tr>";
    //             echo "<th>ID </th>";
    //             echo "<th>Bike</th>";
    //             echo "<th>Chasis Num</th>";
    //             echo "<th>Engine Num</th>";
    //             echo"<th>Color</th>";
                
                
    //         echo "</tr>";
    //         while($row = $result->fetch_assoc()) {
    //             echo "<tr>";
    //             echo "<td>" . $row['id'] . "</td>";
    //             echo "<td>" . $row['bike'] . "</td>";
    //             echo "<td>" . $row['chasisnum'] . "</td>";
    //             echo "<td>" . $row['enginenum'] . "</td>";
    //             echo "<td>" . $row['color'] . "</td>";
                
                
    //         echo "</tr>";
    //         }
    //         echo "</table>";
    //     } else {
    //         echo "0 results";
    //     }

    $conn->close();

?>