<?php
    //start Session
    session_start();

    define('SITEURL','http://localhost:80/Pharmacy/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','MedCenter');

    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error($conn));//connection to database
    $db_select =mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));//selecting database
?>
