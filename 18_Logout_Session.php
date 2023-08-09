<?php

session_start();

session_unset(); // will unset all the session variables

session_destroy(); // will destroy the session

echo "You have been logged out !!!";



?>