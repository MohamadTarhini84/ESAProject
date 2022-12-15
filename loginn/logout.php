<?php

@include '../connect1.php';
session_start();
session_unset();
session_destroy();
header('location:/ESAProject/index.php');
?>

