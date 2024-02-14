<?php
session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:admin_login.php");
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

    <title>Admin Home</title>

    <link rel="stylesheet" type="text/css" href="css/user_home.css" />
  </head>

  <body>
    <?php include 'partials/admin_navbar.php'; ?>
 <div class="container">
  <div class="box my-5">
    <div class="grid">

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/accident.jpeg" alt="Accident" />
          <div class="card-content">
            <h3 class="card-header">Accident</h3>
            <p class="card-text">
              <strong>To View an Accident Report click below button.</strong>
            </p>
            <a href="view_accident_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/murder.jpg" alt="Murder" />
          <div class="card-content">
            <h1 class="card-header">Murder</h1>
            <p class="card-text">
              <strong>To View an Murder Report Click below button.</strong>
            </p>
            <a href="view_murder_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/missing_person.jpg" alt="Missing Person" />
          <div class="card-content">
            <h1 class="card-header">Missing Person</h1>
            <p class="card-text">
              <strong>To View an Missing Person Report</strong>
            </p>
            <a href="view_missing_person_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/missing_vehicle.jpg" alt="Missing Vehicle" />
          <div class="card-content">
            <h1 class="card-header">Missing Vehicle</h1>
            <p class="card-text">
              <strong>To View an Missing Vehicle Report</strong>
            </p>
            <a href="view_missing_vehicle_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/robbery.jpg" alt="Robbery" />
          <div class="card-content">
            <h1 class="card-header">Robbery</h1>
            <p class="card-text">
              <strong>To View an Robbery Report</strong>
            </p>
            <a href="view_robbery_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/others.jpeg" alt="Other Crimes" />
          <div class="card-content">
            <h1 class="card-header">Other Crimes</h1>
            <p class="card-text">
              <strong>To View Other Report</strong>
            </p>
            <a href="view_other_report.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Report</span>
            </button></a>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/users.jpeg" alt="Users details" />
          <div class="card-content">
            <h1 class="card-header">Users Detail</h1>
            <p class="card-text">
              <strong>To View User details Click below button.</strong>
            </p>
            <a href="show_users.php" style="text-decoration: none;">
              <button type="button" class="btn card-btn my-2" style="width: 100%">
              <span class="btn-icon"><ion-icon name="search-outline"></ion-icon></span>
              <span class="btn-text">View Users</span>
            </button></a>
          </div>
        </div>
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

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>