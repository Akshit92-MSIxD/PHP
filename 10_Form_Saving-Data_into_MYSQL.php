<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group textarea {
      height: 100px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>


  <div class="container">
    <h2>Contact Us</h2>
    <form  action = "10_Form_Saving-Data_into_MYSQL.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  <?php
  

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
   // Storing Form data into individual variables :

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



   // Connecting to the MYSQL database :

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "akshit";

   $conn = mysqli_connect($servername,$username,$password,$database);


  
   if(!$conn)
   {
    die(" Connection was not made!!!" . mysqli_connect_error());
   }
   else
   {
   // Creating a table and insert the above form data variables inside it :

   $sql1 = "CREATE TABLE `form1`( `Name` varchar(30) NOT NULL , `Email` varchar(30) NOT NULL , `Message` varchar(100) NOT NULL);";
   $sql2 = "INSERT INTO `form2`(`Name` , `Email` , `Message`) values('$name','$email' , '$message');";


   $result = mysqli_query($conn,$sql1);
   $result = mysqli_query($conn,$sql2);

   if($result)
   {

    echo '<div class="alert alert-success" role="alert">
           <br><br>
                <p> <strong>Success!!!</strong> Your data has been submitted successfully!!!! </p>   <hr> </div> ';
   }

   else
   {
    echo '<div class="alert alert-danger" role="alert">
    <br><br>
         <p> <strong>Error!!!</strong> Your data has been submitted successfully!!!! </p>   <hr> </div> ';
   }

    

 }

}

  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>