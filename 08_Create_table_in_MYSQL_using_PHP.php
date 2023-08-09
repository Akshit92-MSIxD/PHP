<?php

// Connecting to MYSQL DB :

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "akshit"; // DB already present in MYSQL-DB server user account!!!!

 $conn = mysqli_connect($servername,$username,$password,$database);

 if(!$conn)
 {
    die("Sorry we failed to connect : ". mysql_connect_error());
 }
 else
 {
    echo "connection was successful <br>";
 }


 // Creating a table in akshit3 DB in MYSQL :

  $sql = "CREATE TABLE `mytable2` (`Name` VARCHAR(30) NOT NULL , `Role` VARCHAR(30) NOT NULL , `Sno` INT NOT NULL ,
  `Doj` DATETIME NOT NULL ) ";

  $result = mysqli_query($conn,$sql);


   // -----> Checking for the table creation success :

    if($result)
    {
        echo "Table  was created successfully!!!";
    }
    else
    {
        echo "Table was not created successfully  because of error ---> " . mysqli_error($conn);
    }


