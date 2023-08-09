<?php
// Similar to C++ loops , but make sure to add '$' sign in front of variable!!!

$numbers = array("akshit",2,3,4,5);

for($i=0 ; $i < count($numbers) ; $i++)
{
    echo "$numbers[$i] <br>";
}
 // Alternative to iterate over an array!!!
foreach($numbers as $value)
{
    echo "$value <br>";
}

?>