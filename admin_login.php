<?php
  $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/db_connect.php';
  $admin_id = $_POST["admin_id"];
  $password = $_POST["password"];
  
  $sql = "SELECT `admin_id`, `admin_pass` FROM `admin_details` WHERE admin_id='$admin_id' AND admin_pass='$password' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      while ($row=mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['admin_id'] = $admin_id;
        header("location:admin_home.php");
      }
    }
    else{
      $showError = "Invalid Credentials.";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>ADMIN Login</title>
</head>
<body>
    <?php include "partials/home_navbar.php"; ?>
     <?php
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> ' .$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
<div class="video" style="margin-top: 5%"> 
  <div class="center-container">
     <div class="bg-agile">
      <br><br>
      <div class="login-form">
      <p><h2>Admin Login</h2><hr style="color: #ffffff;"></p><br>  
      <form action="/Crime Station/admin_login.php" method="POST">
        <div class="mb-3">
          <label for="admin_id" class="form-label">Admin ID</label>
          <input type="text" class="form-control" name="admin_id" placeholder="Admin ID" id="admin_id" aria-describedby="admin_id">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" maxlength="15" class="form-control" name="password" id="password" placeholder="Enter Password" required>
          <i class="fa fa-eye field-icon togglepassword" id="togglePassword" toggle="#password-field"></i>
        </div>
        <button type="submit" class="form-btn btn btn-primary">Login</button>
      </form>
      </div>  
    </div>
  </div>  
</div>
<!-- Footer -->
<div class="container-fluid bg-dark text-light fixed-bottom">
  <p class="text-center py-3 mb-0" >Copyright Crime Station 2021 | All rghts reserved.</p>
</div>

<script>
  // Eye Icon for Hiding/Displaying password for password

  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e){
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type' , type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

</script>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>