<!-- A cookie is a small file that the server/php-script embeds on the user's computer/browser.  -->

<!-- It contains info about user preferences based on user behaviour.  -->

 <!-- A cookie is often used to identify a user and his behaviour!!! and also collect data about the user!!! -->

 <!-- Cookies are always set and controlled by the server. The web browser
  is only responsible for sending them across to the server with every request.  -->

 <!-- Cookies contain less sensitive data like clicks, favCat , shopping preferences, device specifications, location , language preferences
     and search history.  -->

 <!-- With PHP, you can both create and retrieve cookie values. -->

 <!-- Enhance user experience -->



 <?php

//   A cookie is created with the setcookie() function.

setcookie("category","books", time() + 86000 , "/"); // "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

echo"The cookie has been set!!!";

 ?>


