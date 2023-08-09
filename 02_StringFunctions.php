
<?php

$statement = "Akshit is a good boy";

echo " String : \"$statement\" <br><br> ";

echo "The length of above string is : " . strlen($statement);  // Note (.) operator is used for concatenating two strings!!!

echo "<br>The word count of above string is : "  .  str_word_count($statement);

echo "<br>Reverse of the above string is : \" "  .  strrev($statement)  .  "\"<br> "; 

echo strpos($statement,"good");
echo "<br>";
echo str_replace("Akshit" , "Rohit" , $statement);


?>




<?php

echo "<pre>";
echo ltrim("    this is a good boy  "); 
echo "</pre>";


echo "<pre>";
echo rtrim("       Hello world              ");
echo "</pre>";

?>