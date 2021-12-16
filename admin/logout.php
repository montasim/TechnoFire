<?php
    /* 
    creates a session or resumes the current one based on a session identifier passed via a GET or POST request, 
    or passed via a cookie
    */
    session_start();
    unset($_SESSION['ROLE']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NAME']);

    // when logout clicked redirect to login.php
    header('location:../index.php');
    
    // exit current php script
    die();
?>