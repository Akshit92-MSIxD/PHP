<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
  <form action = "/PHP_ak/05_Get_Post.php" method = "post">

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control"name = "email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php

 if($_SERVER['REQUEST_METHOD']=="POST"){  // Plese take reference from w3schools and mdnwebdocs about SuperGlobals!!!!

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo '<div class="alert alert-success" role="alert">
    <br><br>
  <h4 class="alert-heading">Well done!</h4>
  <p> Your email : ' . $email . '  and password : ' . $password . '  has been submitted successfully!!!! </p>
  <hr>
</div> ';

     
        // Connecting to the database-------->
 }




?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>





