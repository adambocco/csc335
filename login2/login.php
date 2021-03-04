<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- CDN Link for Google API Rich Font-->
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Anton&family=Oi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Bow Wow Login</title>
  </head>
  <body style="background: #ffffff;">


  <div class="d-lg-flex half bg-dark">
    <!-- https://i.pinimg.com/564x/65/a3/34/65a3346ecff95d4835c2a5b136b27e7a.jpg -->
    <div class="bg order-1 order-md-2" style="background-image: url('https://i.pinimg.com/originals/98/9d/0c/989d0c8bdb7985fae0bc842319e66ae6.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-primary text-dark font-weight-bold p-4">
      <a class="text-light font-weight-bold" href="../socialMediaApp/Tempo/index.html" style="text-decoration: none;">Go Home</a><br><br>
      <a class="text-light font-weight-bold" href="../register/register.php" style="text-decoration: none;">Create your Account</a>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
      <div class="container text-dark" style="background: #ffffff;">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <img src="https://i.pinimg.com/originals/07/de/bd/07debd3c60f7e252e42fa76f516624e5.png" style="border-radius: 50%; width: 200px; position: relative; left: 150px;" class="mb-6">
              <h3 style="font-weight: 700; font-family: 'Akaya Kanadaka', cursive; font-size: 35px;" class="text-center font-weight-bold text-dark">Bow-wow Login</h3>
            </div>
            <form action="../socialMediaApp/backendLogic/validate_login.php" method="post">
              <?php
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($url, "emptyFields") == TRUE){
      echo '<p class="alert alert-danger font-weight-bold">You have left both fields blank <i class="fa fa-exclamation-circle"></i></p>';
    }

    else if(strpos($url, "invalidEmail") == TRUE){
      echo '<p class="alert alert-danger font-weight-bold">You need to enter an email as your username <i class="fas fa-exclamation-circle"></i></p>';
    }
    else if(strpos($url, "sqlError") ==TRUE){
      echo '<p class="alert alert-warning font-weight-bold">an unknown database error occurred <i class="fa fa-exclamation-circle"></i></p>';
    }
    else if(strpos($url, "invalidPwd")==TRUE){
      echo '<p class="alert alert-danger font-weight-bold">Incorrect password <i class="fa fa-times-circle"></i></p>';
    }
    else if(strpos($url, "wrongPwd")== TRUE){
      echo '<p class="alert alert-danger font-weight-bold">Incorrect password <i class="fa fa-times-circle"></i></p>';
    }
    else if(strpos($url, "noUser") == TRUE){
      echo '<p class="alert alert-primary font-weight-bold">Looks like you aren\'t in our system. Go ahead and create an account now! <i class="fa fa-exclamation-circle"></i></p>';
    }
    ?>
              <div class="form-group first">
                <label for="username" class="form-label text-dark font-weight-bold" style="font-family: 'Akaya Kanadaka', cursive; font-size: 25px;">Email</label>
                <input type="text" class="form-control" style="font-family: 'Akaya Kanadaka', cursive;" id="email" name="email">

              </div>
              <div class="form-group last mb-3">
                <label for="password" class="form-label text-dark font-weight-bold" style="font-family: 'Akaya Kanadaka', cursive; font-size: 25px;">Password</label>
                <input type="password" class="form-control" id="password" style="font-family: 'Anton', sans-serif;" name="password">

              </div>

              <div class="d-flex mb-5 align-items-center">

                <span class="pull-left font-weight-bold">Don't have an account? <a style="text-decoration: none;" class="text-success font-weight-bold"href="../register/register.php">Create one here!</a></span>
                <span class="ml-auto"><a href="#" class="forgot-pass text-primary font-weight-bold" style="text-decoration: none;">Forgot Password</a></span>
              </div>

              <input type="submit" style="font-size: 20px; font-weight: 900;" value="Log In" class="btn btn-block btn-danger" name="login">


            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
