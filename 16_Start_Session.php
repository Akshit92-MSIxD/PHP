 <!-- A session is used to store sensitive info(in variables) -->
 <!-- It is used to manage information accross multiple pages in a app/website -->
 <!-- Unlike a cookie, the information is not stored on the users computer but on the server -->
 <!-- It stores sensitive info such as login details , credit card/debit card details , personal information etc -->


 <?php

 // After verifying the user login info , we start the session
  session_start();

  // setting the session variables 

  $_SESSION['username'] = 'akshit92';
  $_SESSION['password'] = 'Akshit@92';
  $_SESSION['favCat'] = 'Books';

  echo "We have saved your session !!! ";


 ?>