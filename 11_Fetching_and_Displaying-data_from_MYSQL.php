<?php

  // Connecting to MYSQL DB :

  $servername = 'localhost';
  $username = "root";
  $password = "";
  $database = "akshit";

  $conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn)
  {
    die("Connection not successful!!!");
  }

// Fetching the content from 'akshit' DB in MYSQL_DB

 $query = "SELECT * from `employee`;";

 $result = mysqli_query($conn,$query); //Retrieving the contents of the table

 $num = mysqli_num_rows($result);

 echo " $num rows has been fetched successfully!!! <br><br>";

if($num>0)
{
 while($row=mysqli_fetch_assoc($result)) // mysqli_fetch_assoc($result) will return the rows in form of associate array one by one until it becomes NULL!!!
 {
     echo $row['Sno']  . ". " . $row['Name'] . " has been working as a " . $row['Role'] . " since " . $row['Doj'];
     echo "<br>";
 }
}


 // Closing the statement
  mysqli_free_result($result);


  //Closing the connection
  mysqli_close($conn);








?>