
<?php

// Connecting to MYSQL DB :

$servername = "localhost";
$username = "root";
$password = "";
$database = "akshit"; // DB already present in MYSQL-DB server user account!!!!

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
   die("Sorry we failed to connect : ". mysql_connect_error());
}


// Inserting Data into MYSQL DB  

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'] , $_POST['desc']))
{


$title = $_POST['title'];
$desc = $_POST['desc'];


$query = "INSERT into `notes`(`Title`,`Description`,Tstamp) values('$title','$desc',current_timestamp())";

$result = mysqli_query($conn,$query);

 if($result)
 {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Holy guacamole!</strong> Your notes has been added successfully!!!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
 }

}

?>



<!--  Updating existing record/note into MYSQL DB   -->  

<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editTitle'] , $_POST['editdesc'])) // isset(var1,......) checks if variable is set or not , returns true if declared and not NULL otherwise false!!!
{
  
$SnoEdit= $_POST['SnoEdit'];

$editTitle = $_POST['editTitle'];
$editdesc = $_POST['editdesc'];

$query = "UPDATE `notes` SET `Title` = '$editTitle' , `Description` = '$editdesc' where `notes`.`Sno` = '$SnoEdit' ";

$result = mysqli_query($conn,$query);

 if($result)
 {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
   Your note has been edited successfully!!!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
 }
}

?>



<!-- Deleting existing record from MYSQL DB -->

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SnoDelete']))
{
  
  $SnoDelete = $_POST['SnoDelete'];

  $query = " DELETE from `notes` where `Sno` = '$SnoDelete';";

  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
   Your note has been deleted successfully!!!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
  }

}

?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> iNotes App </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     
    <!-- including CSS for datatables provided by jquery -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >

  </head>


  <body>
  

  <!-- Modal(visible only when it is triggered by a button!!!) for Edit button -->

  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container my-2">
        <h2> Add a Note </h2>
        <form my-4 action="/PHP_ak/12_CRUD_App.php" method="post">

          <input type="hidden" id="SnoEdit" name="SnoEdit">

          <div class="mb-3">
            <label for="title" class="form-label">Edit Note title</label>
            <input type="text" class="form-control" id="editTitle" name="editTitle" required>
          </div>
          
          <div class="mb-3">
            <label for="desc" class="form-label"> Edit Note Description</label><br>
              <textarea class=" form-floating form-control"  id="editdesc" name="editdesc" required></textarea>
          </div>

          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

        </form>

    </div>

    </div>
    </div>
    </div>
    </div>



   <!-- Modal(visible only when it is triggered by a button!!!) for Delete button -->

   <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Note!!!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container my-2">
        <h2> Are you sure you want to delete this note ?</h2>
        <form my-4 action="/PHP_ak/12_CRUD_App.php" method="post">

          <input type="hidden" id="SnoDelete" name="SnoDelete">

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Confirm</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>

        </form>

    </div>

    </div>
    </div>
    </div>
    </div>


      


     

  <!-- Navigation -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">iNotes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>

            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

          </div>
        </div>
      </nav>





   <!-- Form taking notes -->

      <div class="container my-4">
        <h2> Add a Note </h2>
        <form my-4 action="/PHP_ak/12_CRUD_App.php" method="post">

          <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          
          <div class="mb-3">
            <label for="desc" class="form-label">Note Description</label><br>
              <textarea class=" form-floating form-control"  id="desc" name="desc" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Add Note</button>
        </form>

      </div>





    <!-- Table representing  the notes and its description -->

<div class="container">


  <table class="table my-4" id="myTable" >


            <thead>
              <tr>
                <th scope="col">S.no</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>


            <tbody>

          <!-- Selecting records from MYSQL DB and display it in a table -->

            <?php
              
              $sql = "SELECT * from `Notes`;";
              $result = mysqli_query($conn,$sql);

              $num = mysqli_num_rows($result);

              if($num>0)
              {
                   $Sno = 1;
                  while($row = mysqli_fetch_assoc($result))
                  {
                    echo"
                    <tr>
                    <th scope='row'>" . $Sno . "</th>
                    <td>" . $row['Title'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td> <button type='button' class='btn btn-primary edit' id='".$row['Sno']."' >Edit</button>  <button type='button' class='btn btn-primary delete'>Delete</button></td>
                  </tr>";
                  $Sno++;
                  }
              }

              ?>
          
        </tbody>

  </table>

</div>



 <!-- including jquery -->
 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<!-- including Js for datatables provided by jquery -->
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<!-- Making normal table in the form of datatable -->

    <script>

       let table = new DataTable('#myTable');  // myTable is id of above table used!!!! 

    </script> 


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


   



  <!-- Script containing Edit button functionality-->

  <script>
    
        let edit_btns = document.getElementsByClassName('edit');

        var edit_btns_arr = Array.from(edit_btns);

        edit_btns_arr.forEach((element)=>{
    

            element.addEventListener("click",(e)=>{  // e indicates the event occured at a particular target(element)!!!

            let target_btn = e.target;

            let tr = target_btn.parentNode.parentNode;
            
            let SnoFetch = target_btn.id;
            let titleFetch = tr.getElementsByTagName("td")[0].innerText ; 
            let descFetch = tr.getElementsByTagName("td")[1].innerText ; 

              editTitle.value = titleFetch;
              editdesc.value = descFetch;
              SnoEdit.value = SnoFetch;
              console.log("Sno : ",SnoFetch);

              
              $('#editModal').modal('toggle');
              
            });
      });

  </script>






  <!-- Script containing Delete button functionality-->

  <script>
      
    let delete_btns = document.getElementsByClassName('delete');

    let delete_btns_arr = Array.from(delete_btns);

    delete_btns_arr.forEach((element)=>
    {
      element.addEventListener("click",(e)=>{

        let target_delete_btn = e.target;

        let sibling_edit_btn =  target_delete_btn.previousElementSibling;

        SnoDelete.value = sibling_edit_btn.id;

        $('#deleteModal').modal('toggle');
          
      });

    });

  </script>


 

  </body>
</html>