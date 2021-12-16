<?php
    // check if db.inc.php is defined. if not defined it will not work.
    require_once('includes/config.php');

    // "order by id desc" is used to show recent added catagory first
    $res=mysqli_query($db_connection,"select * from settings where role=2 order by id desc");

    $row=mysqli_fetch_assoc($res);

   // if user is not admin he can not access this page.
   if($_SESSION['ROLE'] !=1 ){
      // get id from url
      header('location:index.php?id='.$_SESSION['USER_ID']);

      // exit current php script
      die();
  }
?>

<!-- header for all admin file is defined here -->
<!doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!-- head for all admin file is defined here -->

    <head>
        <meta charset="utf-8">
        <title>Dashboard Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

        <script src="https://kit.fontawesome.com/5eaba723a4.js" crossorigin="anonymous"></script>
    </head>

    <!-- head for all admin file is defined here -->
    <!-- end in footer.php -->

    <body>
        <?php
            require_once('includes/sidebar.php');
        ?>

        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <?php 
                            echo '<a class="navbar-brand" href="catagory.php"><img style="width:80px; height: 40px;" src="../assets/images'.$row['logo'].'" alt="Logo"></a>';
                        ?>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="user-area dropdown">
                            <!--Which user will login it will show his/her name -->
                            <h4 href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">TechnoFire Admin Dashboard </h4>
                        </div>
                    </div>
                </div>
            </header>
