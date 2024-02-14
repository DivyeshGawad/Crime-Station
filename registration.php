<?php
  $showAlert = false;
  $showError = false;
  $showError2 = false;
if(isset($_POST['submit'])){
include "partials/db_connect.php";
  $username = $_POST["email_id"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $phone_no = $_POST["phone_no"];
  $address = $_POST["address"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];

  // To check whether the username exists.
  $existsql = "SELECT * FROM `users_details` WHERE email_id = '$username'";
  $result = mysqli_query($conn, $existsql);
  $numExistsRows = mysqli_num_rows($result);
  if($numExistsRows > 0){
    $showError = "Email ID already exists.";
  }
  else{
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users_details`( `email_id`, `name`, `gender`, `phone_no`, `address`, `password`, `register_date`) VALUES ('$username', '$name','$gender', '$phone_no', '$address', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showAlert = true;
        header("location:/Crime Station/index.php?signupsuccess=true");
        exit();
      }
      else{
        $showError2 = "Password do not match.";
      }
    header("location:/Crime Station/index.php?signupsuccess=false&error=$showError");
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
  <title>New User Registration</title>

</head>
<body>
	<?php include "partials/home_navbar.php"; ?>
  <?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your account is now created and you can login as User.
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
      <p><h2>New User Registration</h2><hr style="color: #ffffff;"></p><br>  
      <form name="myForm" onsubmit="return validateForm()" method="post">
        <div class="mb-3" id="femail">
          <label for="email_id" class="form-label">Enter Email ID</label>
          <input type="email" class="form-control" name="email_id" placeholder="Email ID" aria-describedby="email_id" autocomplete="off" required >
          <span class="formerror text-danger font-weight-bold"> </span>
        </div>
        <div class="mb-3" id="fname">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off" required >
            <span class="formerror text-danger font-weight-bold"> </span>
        </div>
        <div class="mb-3">
        <label for="gender">Gender:</label>
        <select class="form-select" id="gender" name="gender" required >
          <option selected="">Choose...</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        </div>
        <div class="mb-3" id="fphone">
          <label for="phone" class="form-label">Phone No.</label>
          <input type="tel" class="form-control" name="phone_no" placeholder="Phone No." autocomplete="off" required >
          <span class="formerror text-danger font-weight-bold"> </span>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Enter Address</label>
          <textarea rows="2" cols="20" class="form-control" name="address" placeholder="Enter Address Here" required ></textarea>
        </div>
        <div class="mb-3" id="fpass">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter Password" autocomplete="off" required >
          <span class="formerror text-danger font-weight-bold"> </span>
        </div>
        <div class="mb-3" id="fcpass">
          <label for="cpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" autocomplete="off" required >
          <span class="formerror text-danger font-weight-bold"> </span>
        </div>
        <input type="submit" id="submit" name="submit" value="Submit" class="form-btn btn btn-primary">
      </form>
      </div>  
    </div>
  </div>  
</div>
<!-- Footer -->
<div class="container-fluid bg-dark text-light">
  <p class="text-center py-3 mb-0" >Copyright Crime Station 2021 | All rghts reserved.</p>
</div>

<script>
 
  function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
      var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var email = document.forms['myForm']["email_id"].value;
    if (email.length>30){
        seterror("femail", "*Email length is too long");
        returnval = false;
    }
      var name = document.forms['myForm']["name"].value;
    if (name.length<5){
        seterror("fname", "*Length of name is too short");
        returnval = false;
    }

    if (name.length == 0){
        seterror("fname", "*Length of name cannot be zero!");
        returnval = false;
    }


      var phone = document.forms['myForm']["phone_no"].value;
    if (phone.length != 10){
        seterror("fphone", "*Phone number should be of 10 digits!");
        returnval = false;
    }

       var password = document.forms['myForm']["password"].value;
    if (password.length < 6){
        seterror("fpass", "*Password should be atleast 6 characters long!");
        returnval = false;
    }

      var cpassword = document.forms['myForm']["cpassword"].value;
    if (cpassword != password){
        seterror("fcpass", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}

</script>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>