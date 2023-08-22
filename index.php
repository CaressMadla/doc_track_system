<?php
 require "connection.php"; 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

  </head>


  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h1 style="color: white;">File Management System</h1>
                    </a>
                </div>
                <div class="login-form">
                    <form action="dashboard.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>
                                <div class="social-login-content">
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="sign_up.php"> Sign Up Here</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


  </body>
</html>

