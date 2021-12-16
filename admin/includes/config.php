<?php
    // database connnectivity is defined here
    
    // start session for every page
    session_start();
    //  connecting to databese
    
    //  parameers used : localhost, username, password, database name
    $db_connection = mysqli_connect('localhost','root','','technofire');

    //Check the connection
    if($db_connection != true){
        // if connection error occurs redirect to 404 page
		echo "<script> location.href='404.php'; </script>";
        exit;
    }
?>
