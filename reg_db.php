<?php
require_once 'salesman_db_conn.php';

                  $id = $_POST['id'];
                  $date = $_POST['date'];
                  $owner = $_POST['owner'];
                  $sold="yes";
                  $sql="UPDATE invent SET date='$date',owner='$owner', sold='$sold' WHERE id='$id'";
                    $x=$conn->query($sql);

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

?>