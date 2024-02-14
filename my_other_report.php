<?php
session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:user_login.php");
        exit();
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

    <title>My Other Reports</title>

    <link rel="stylesheet" type="text/css" href="css/user_home.css" />
  </head>

  <body>
    <?php include 'partials/user_navbar.php'; ?>
    <div class="container my-4">
      <table class="table table-bordered table-striped table-hover text-center" id="myTable" style="width: 100%">
        <thead>
          <tr>
            <th scope="col" class="bg-dark text-light">Sr.No.</th>
            <th scope="col" class="bg-dark text-light">Case ID</th>
            <th scope="col" class="bg-dark text-light">Title</th>
            <th scope="col" class="bg-dark text-light">Description</th>
            <th scope="col" class="bg-dark text-light">Report Time</th>
          </tr>
        </thead>
        <tbody>

        <?php
        $user_id = $_SESSION['email_id'];
        include 'partials/db_connect.php';
        $sql = "SELECT `case_id`, `title`, `description`, `report_time` FROM `other_complaint` WHERE `user_id` = '$user_id'";
            $result = mysqli_query($conn,$sql);
            $sno = 0;
            // We can fetch data in better way in while loop
                while($row = mysqli_fetch_assoc($result)){
                    $sno = $sno+1;
                    echo "<tr>
                    <th scope='row'>". $sno. "</th>
                    <td>" . $row['case_id'] . "</td>
                    <td>" . $row['title'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>" . $row['report_time'] . "</td>
                  </tr>";
                  }    
              ?>          
        </tbody>
      </table>

          <hr>
      </div>

    <!-- Footer -->

  <div class="container-fluid bg-dark text-light fixed-bottom">
    <p class="text-center py-3 mb-0" >Copyright Crime Station 2021 | All rghts reserved.</p>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>