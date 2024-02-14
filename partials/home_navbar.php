<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-weight:700;">Crime Station</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        </ul>';
        if(!$loggedin){
        echo ' <a href="user_login.php"><button class="btn btn-outline-success ml-2">User Login</button></a>
        <a href="admin_login.php"><button class="btn btn-outline-success mx-2">Admin Login</button></a>';
      }
      echo'
    </div>
  </div>
</nav>';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] = "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You had SignUp successfully. You can now login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
elseif(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] = "false"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Error!</strong> You had failed to SignUp. Try Again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'; 
}
?>