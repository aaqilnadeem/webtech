<?php
require_once 'salesman_db_conn.php';

$username=$_POST["username"];
$password=$_POST["password"];
if (mysqli_connect_errno())
 	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


        $sql= "SELECT * FROM logindata WHERE username='$username' AND password='$password'";
        $sqlr=mysqli_query($conn,$sql);
        $datas=mysqli_fetch_array($sqlr);
        $idss=$datas['id'];
        if(mysqli_num_rows($sqlr)>0){
            if($idss==1){
                // for admin
                //admin id will always 1
                echo "<script>window.location.assign('ad_home.php');</script> ";
            }
            else{
                //for employees
                //employee id will never be one
                echo "<script>window.location.assign('salesman_home.php');</script> ";
            }
        }
        else{
            echo " can not find data";
        }

$conns->close();



?>