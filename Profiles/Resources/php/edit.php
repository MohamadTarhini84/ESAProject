<?php 
    include("db.php");

    $sql="SELECT * FROM users WHERE id=1";
    $result=mysqli_connect($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    echo '';
?>