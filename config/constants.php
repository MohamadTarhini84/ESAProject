<?php
    //start Session
    session_start();

    define('SITEURL','http://localhost:80/ESAProject/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','abcd');

    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error($conn));//connection to database
    $db_select =mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));//selecting database
    
    /*if($conn){
        $sql="SELECT * FROM admin .'<br>'";

    }*/
    
?>
