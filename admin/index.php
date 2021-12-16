<?php
   // check if database connectivity is defined. if not defined it will not work.
   require_once('includes/config.php');

   $msg="";

   /*
   when username & password will be provided it will give permission to submit form otherwise error
   database data will be retrive here
   The data sent to the server with POST is stored in the request body of the HTTP request
   */
   if(isset($_POST['email']) && isset($_POST['password'])){
      // "mysqli_real_escape_string" is used to securely retrive data from databese 
      // retriving email from database
      $email = mysqli_real_escape_string($db_connection,$_POST['email']);

      // retriving password from database
      $password = mysqli_real_escape_string($db_connection,$_POST['password']);

      // check if email and password exist in database
      $res=mysqli_query($db_connection,"select * from admin where email='$email' and password='$password'");

      // check if any data is present in database
      $count=mysqli_num_rows($res);

      // input data is checked here with database
      // if data is matched with database then goto catagory.php
      if($count>0){
         // if user input is correct checks user role for the company
         $row=mysqli_fetch_assoc($res);

         // get role
         $_SESSION['ROLE']=$row['role'];

         // get id
         $_SESSION['USER_ID']=$row['id'];

         // get username
         $_SESSION['USER_NAME']=$row['name'];

         // if details is correct then redirected to catagory.php page
         header('location:catagory.php');

         die();
      }
      // if not matched with database show error
      else{
         // this message will be displayed if input is not matched with database
         $msg="Please enter correct login details";
      }
   }
?>

<!doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    </head>

    <body class="bg-dark">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-form mt-150">

                        <div style="color: black; text-align: center;">
                            <h3>Sign In To Admin Panel</h3>
                        </div>
                        <br>
                        <form method="post">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

                            <div class="result_msg">
                                <?php echo $msg?>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div style="color: white; text-align: center;">
                    <p style="color: white;">TechnoFire &copy; <?php echo date("Y"); ?> ALL RIGHTS RESERVED
                    </p>
                    Design & Developed by :: <a style="color: red;" href="https://github.com/montasim/"> Ｍｏｎｔａｓｉｍ
                    </a> | <a style="color: red;" href="https://github.com/abidhasanpiash/"> Ａｂｉｄ </a>
                </div>
            </div>
        </div>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

    <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    </body>

</html>
