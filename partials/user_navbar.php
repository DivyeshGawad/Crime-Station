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
          <a class="nav-link active" aria-current="page" href="user_home.php">Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        </ul>';
        if(!$loggedin){
        echo ' <a href="user_login.php"><button class="btn btn-outline-success ml-2">User Login</button></a>
        <a href="admin_login.php"><button class="btn btn-outline-success mx-2">Admin Login</button></a>';
      }
      if($loggedin){
       echo ' 
       <p class=" my-0 mx-2 text-light">Welcome '.$_SESSION['email_id'].'</p>
       <a href="logout.php"><button class="btn btn-outline-success ml-2">Logout</button></a>';
      }
      echo'
    </div>
  </div>
</nav>';
if(isset($_GET['complaintsuccess']) && $_GET['complaintsuccess'] = "true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Complaint is Submitted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
elseif(isset($_GET['complaintsuccess']) && $_GET['complaintsuccess'] = "false"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Failed to Submit Complaint.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; 
}
?>