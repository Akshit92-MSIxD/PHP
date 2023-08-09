<?php


// Connecting to  MYSQL Database : 

$servername = "localhost";
$username = "root";
$password = "";
$database = "akshit";

$conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn)
  {
    die("Sorry the connection was not successful:  " . mysql_connect_error());
  }
  else
  {
    echo "Your connection was successful!!!";
  }


  // Insert into table  of "akshit" DB in MYSQL :

   $name = "Akshit Rawat";
   $role = "Full Stack Engineer";
  
   $sql = "INSERT INTO `mytable1` (`Name`, `Role`, `Sno`, `Doj`) VALUES ('$name', '$role', NULL, '2023-06-02 08:52:42.000000');";

   $result = mysqli_query($conn,$sql);


   if($result)
   {
    echo "Data is inserted successfully in table!!!!";
   }
   else{
    echo "Data is not inserted successfully in table!!!! " . mysql_error($conn);
   }

    //Closing the statement
    mysqli_free_result($res);

    //Closing the connection
    mysqli_close($con);

?>