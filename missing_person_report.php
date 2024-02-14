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
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'partials/db_connect.php';
  $user_id = $_POST['email'];
  $name = $_POST['v_name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $height = $_POST['v_height'];
  $missing_location = $_POST['missing_location'];
  $missing_date = $_POST['missing_date'];
  $contact_info = $_POST['contact_info'];
  $files = $_FILES['file'];
   
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck, $fileextstored)){
     $destinationfile = 'Missing Person/'.$filename;
     move_uploaded_file($filetmp, $destinationfile);

      $sql = "INSERT INTO `missing_person_complaint` (`user_id`, `v_name`, `v_age`, `v_gender`, `v_height`, `missing_location`, `missing_date`, `contact_info`, `image_name`, `report_time`) VALUES ('$user_id', '$name', '$age', '$gender', '$height', '$missing_location', '$missing_date', '$contact_info', '$destinationfile', current_timestamp())";

      $result = mysqli_query($conn, $sql);
    }
        if($result){
          $showAlert = true;
        header("location:/Crime Station/user_home.php?complaintsuccess=true");
        exit();
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

<div class="" style="margin-top: 2%"> 
  <div class="center-container">
     <div class="bg-agile">
      <br><br>
      <div>
      <p><h2>New Complaint</h2><hr style="color: #ffffff;"></p><br>  
      <form action="missing_person_report.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="email_id" class="form-label">Email ID</label>
          <input type="email" style="width: 100%" class="text-dark" readonly="readonly" name="email" placeholder="Email ID" required="" value= <?php  echo $_SESSION['email_id'] ?>>
        </div>
        <div class="mb-3">
          <label for="Victim name" class="label-txt form-label">Enter Victims's Name</label>
          <input type="text" class="form-control" name="v_name" id="v_name" placeholder="Victim's Name" aria-describedby="v_name">
        </div>
        <div class="mb-3">
          <label for="age" class="label-txt form-label">Enter Age</label>
          <input type="number" class="form-control" name="age" id="age" placeholder="Age" aria-describedby="age">
        </div>
        <div class="mb-3">
        <label for="gender">Gender:</label>
        <select class="form-select" id="gender" name="gender" required>
          <option selected="">Choose...</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>    
        </div>
        <div class="mb-3">
          <label for="Victim height" class="label-txt form-label">Enter Victims's Height</label>
          <input type="number" class="form-control" name="v_height" id="v_height" placeholder="Victim's Height" aria-describedby="v_height">
          <div id="help" class="form-text">Please Enter Height in Centimeter (cm).</div>
        </div>
        <div class="mb-3">
          <label for="missing location" class="form-label">Enter Missing From</label>
          <textarea rows="2" cols="20" class="form-control" name="missing_location" placeholder="Missing From"></textarea>
        </div>
        <div class="mb-3">
          <label for="missing date" class="label-txt form-label">Enter Missing Date</label>
          <input type="date" class="form-control" name="missing_date" id="missing_date" placeholder="Missing Date" aria-describedby="missing_date">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Contact Info.</label>
          <input type="tel" class="form-control" maxlength="10" name="contact_info" id="contact_info" placeholder="Contact Info.">
        </div>
        <div class="mb-3">
          <label for="Victim image" class="label-txt form-label">Enter Victims's Image</label>
          <input type="file" class="form-control" name="v_image" id="v_image" placeholder="Victim's Image" aria-describedby="v_image">
        </div>
        <button type="submit" class="form-btn btn btn-primary">Submit</button>
      </form>
      </div>  
    </div>
  </div>  
</div>
<!-- Footer -->
  <div class="container-fluid bg-dark text-light">
    <p class="text-center py-3 mb-0" >Copyright Crime Station 2021 | All rghts reserved.</p>
  </div>

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>