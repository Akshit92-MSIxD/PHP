<?php
echo "Hello World <br>";
$salary = 2000;
echo "Akshit has a stipend of Rs. $salary <br>";
?>



<?php

// Data Types in PHP : string , integer , float , boolean , array , object and NULL
$x = true;
$y = false;


echo var_dump($y); // Note : for $y = false it will print empty string!!!!
echo var_dump($salary);

$z = NULL;

echo var_dump($z);
echo "<br>";



?>



<?php

$fruits = array("apple","banana","papaya","guava","mango");
echo var_dump($fruits);

echo "<br>";
echo $fruits[0];

echo "<br>";
echo $fruits[1];

echo "<br>";
echo $fruits[2];

echo "<br>";
echo $fruits[3];

echo "<br>";
echo $fruits[4];

?>