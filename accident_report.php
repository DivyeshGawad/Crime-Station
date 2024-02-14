<?php 
session_start();
  if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin']!=true){
        header("location:user_login.php");
        exit();
    }
?>
<?php
  $showAlert = false;
  $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include "partials/db_connect.php";
  $email = $_POST["Email"];
  $location = $_POST["location"];
  $desc = $_POST["descrpition"];
  $sql = "INSERT INTO `accident_complaint` (`user_id`, `location`, `description`, `report_time`) VALUES ('$email', '$location', '$desc', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  if($result){
          $showAlert = true;
        header("location:/Crime Station/user_home.php?complaintsuccess=true");
        exit();
          // $showAlert = "Complaint Submitted Successfully.";
          }
          else{
            header("location:/Crime Station/user_home.php?compliantsuccess=false&error=$showError");
            exit();
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
	<!-- Font awesome cdn link for Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<title>New Complaint</title>

</head>
<body>
	<?php include "partials/user_navbar.php"; ?>
  
  <?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> '.$showAlert.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  <?php
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> ' .$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>

<div class="" style="margin-top: 2%"> 
  <div class="center-container">
     <div class="bg-agile">
      <br><br>
      <div>
      <p><h2>New Complaint</h2><hr style="color: #ffffff;"></p><br>  
      <form action="/Crime Station/accident_report.php" method="POST">
        <div class="mb-3">
          <label for="email_id" class="form-label">Email ID</label>
          <input type="email" style="width: 100%" class="text-dark" readonly="readonly" name="Email" placeholder="Email ID" required="" value= <?php echo $_SESSION['email_id'] ?>>
        </div>
        <div class="mb-3">
          <label for="location" class="label-txt form-label">Enter Accident Location</label>
          <input type="text" class="form-control" name="location" id="location" placeholder="Location of Accident" aria-describedby="location">
        </div>
        <div class="mb-3">
          <label for="descrition" class="form-label">Enter Description of Accident</label>
          <textarea rows="2" cols="20" class="form-control" name="descrpition" placeholder="Description"></textarea>
        </div>
        <button type="submit" class="form-btn btn btn-primary">Submit</button>
      </form>
      </div>  
    </div>
  </div>  
</div>
<!-- Footer -->
  <div class="container-fluid bg-dark text-light fixed-bottom">
    <p class="text-center py-3 mb-0" >Copyright Crime Station 2021 | All rghts reserved.</p>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>