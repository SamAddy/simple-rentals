<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "car_db";
    //establishing connection and also checking if the connection was established or not.
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?> 