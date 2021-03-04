<?php
session_start();
if(isset($_SESSION['email'])){
  require('../socialMediaApp/backendLogic/dbConn.php');
  $get_user_data = 'SELECT * FROM users WHERE email="'.$_SESSION['email'].'"';
  $query_results = mysqli_query($conn, $get_user_data);
  if(mysqli_num_rows($query_results) >0){
    while($row = mysqli_fetch_assoc($query_results)){
      $first_name = $_SESSION['first_name'] = $row['first_name'];
      $last_name = $_SESSION['last_name'] = $row['last_name'];
      $email = $_SESSION['email'] = $row['email'];

    }
    echo '
      <!DOCTYPE HTML>
      <html lang ="en" dir="ltr">
      <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
      <body>
      <div class="container-fluid">
      <div class="card text-light bg-dark mb-5">
        <div class="card-header">
        <div class="card-body">
        <div class="card-title">
        My User Profile
        <br><br>
        <input type="submit"  href="../.../socialMediaApp/backendLogic/logout.php" value="Logout" class="btn btn-danger">

        </div>
        <div class="card-text">
        My name: '.$first_name. ' ' .$last_name. '<br>
        My email: '.$email.'
        </div>
        </div>
        </div>
      </div>
      </div>
      </body>
      </html>
    ';
  }
}
else{
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit();
}
?>
