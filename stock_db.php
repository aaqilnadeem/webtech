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
                  $ch = $_POST['chasisnum'];
                  $eng = $_POST['enginenum'];
                  $col = $_POST['color'];
                  $sql = "INSERT INTO invent(bike, chasisnum, enginenum, color)
                    Values ('$bike','$ch', '$eng','$col')";
                    $x=$conn->query($sql);

if ( $x=TRUE )
{
echo "New record is inserted successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

?>