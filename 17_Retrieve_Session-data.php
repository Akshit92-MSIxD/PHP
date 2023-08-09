<?php

//  Start the session and retrieve/get session variables data accross differenet pages

session_start() ; // include this statement in every page where we want to access session variables!!!

if(isset($_SESSION['username']))
{
echo "Welcome " . $_SESSION['username'] . "<br>";
echo "Your favourite category is : " . $_SESSION['favCat'];
}

else
{
    echo "Please login to continue!!!";
}


?>