<?php

 // Conneting to the MySQL Database : 

 $servername = "localhost"; // Credentidals required to connect to the DB!!!
 $username = "root";
 $password = "";


        // -----> Create a connection :

        $conn = mysqli_connect($servername,$username,$password);


        // ----->  Die if connection was not succesful :

            if(!$conn)
            {
                die("Sorry we failed to connect : " . mysqli_connect_error());
            }
            else
            {
                echo "connection was successful <br>";
            }

       

                
// Create a Database in MySQL DB :

  $sql = "create database akshit2";

   $result = mysqli_query($conn,$sql);


        // -----> Checking for the DB creation success :

        if($result)
        {
            echo "DB  was created successfully in MYSQL!!!";
        }
        else
        {
            echo "DB was not created successfully in MYSQL!!! because of error ---> " . mysqli_error($conn);
        }

 


 
 



?>