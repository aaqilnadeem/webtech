<?php
require_once 'salesman_db_conn.php';

                  $bike = $_POST['bike'];
                  $ch = $_POST['chasisnum'];
                  $eng = $_POST['enginenum'];
                  $col = $_POST['color'];
                  $sql = "INSERT INTO invent(bike, chasisnum, enginenum, color)
                    Values ('$bike','$ch', '$eng','$col')";
                    // $x=$conn->query($sql);

                    if ($conn->query($sql) === TRUE) {
                      echo "New record created successfully";
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }
    

?>