<?php

//Associate Arrays :
$favColor = array('Akshit' => 90 , 'Ayush' => "Green" , 'Rohit' => 'Violet' , 'Deepak' => "Blue");


// echo $favColor['Akshit'];
// echo $favColor['Ayush'];
// echo $favColor['Rohit'];
// echo $favColor['Deepak'];

foreach($favColor as $key => $value )
{
    echo " Favourite color of $key is : $value <br> ";
}


// Multidimesional Arrays :

$multiarr = array( array(1,2,3,4)
                , array(10,20,30,40) ,
                  array(100,200,300,400) ) ;

  for($i=0 ; $i<count($multiarr);$i++)
  {
     for($j=0 ; $j < count($multiarr[$i]);$j++)
     {
        echo $multiarr[$i][$j] . " ";
     }

     echo "<br>";

  }

?>


<?php

// Note in PHP Global scope is  outside the function => means global variables cannot be directly accessed inside the function!!!!

  $g1 = 20;

  function printGlobalVariable()
  {
    global $g1;  // we must specify that g1 is global in order to use it inside the function!!!

    echo "$g1 <br> ";

  }

  printGlobalVariable();

  echo var_dump($GLOBALS); // Note : GLOBALS is a SuperGlobals(built-in variables that are always available in all scopes.)


?>