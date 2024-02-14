<?php
session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:admin_login.php");
        exit();
    }
    include 'partials/db_connect.php';
$insert = false;
$delete = false;
// Delete the record
if(isset($_GET['delete'])){
$sno = $_GET['delete'];
$sql = "DELETE FROM `contact` WHERE `contact`.`Sr. no.` = $sno";
$result = mysqli_query($conn,$sql);
if ($result) {
  $delete = true;
}
else{
  echo "We failed to delete the note.";
}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $sql = "INSERT INTO `contact` (`Name`, `phone_no`) VALUES ('$name', '$phone_no');";
    $result = mysqli_query($conn, $sql);
  // Adding new user data in db
  if($result){
    $insert = true;
    }
  else{
      echo "<br>The data is not inserted successfully because of this error ---->". mysqli_connect_error($conn);
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <title>Contact Us</title>

    <link rel="stylesheet" type="text/css" href="css/user_home.css" />
  </head>
  <body>
          <?php include 'partials/admin_navbar.php'; ?>
      <?php 
      if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> New Contact has been Inserted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
      ?>
      <?php
      if($delete){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Contact has been Deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
      ?>
      <div class="container">
          <h2>Add New Contact</h2>
        <form action="/Crime Station/edit_contact.php" method="POST">
            <div class="mb-3 my-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            <div class="mb-3 my-3">
              <label for="name" class="form-label">Contact Info</label>
              <input type="number" class="form-control" id="phone_no" name="phone_no" maxlength="10" aria-describedby="phone_no">
            </div>
            <button type="submit" class="btn btn-primary">Add Contact</button>
        </form>
      </div>
      <div class="container my-4">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">Sr.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Contact Info.</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM `contact`";
            $result = mysqli_query($conn,$sql);
            $sno = 0;
            // We can fetch data in better way in while loop
                while($row = mysqli_fetch_assoc($result)){
                    $sno = $sno+1;
                    echo "<tr>
                    <th scope='row'>". $sno. "</th>
                    <td>" . $row['Name'] . "</td>
                    <td>" . $row['phone_no']. "</td>
                    <td><button class='edit btn btn-sm btn-primary' id=".$sno.">Edit</button>   <button class='delete btn btn-sm btn-danger' id = d".$sno.">Delete</button> </td>
                  </tr>";
                  }    
              ?>          
        </tbody>
      </table>
                  <hr>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
deletes = document.getElementsByClassName('delete');
Array.from(deletes).forEach((element) => {
  element.addEventListener("click", (e) => {
    console.log("delete",);
    tr = e.target.parentNode.parentNode;
    name = tr.getElementsByTagName("td")[0].innerText;
    phone_no = tr.getElementsByTagName("td")[1].innerText;
    sno = e.target.id.substr(1,);
    if(confirm("Are you sure..")){
      console.log("yes");
      window.location = `/Crime Station/edit_contact.php?delete=${sno}`;
    }
    else{
      console.log("No");
    }
  })
})
</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>