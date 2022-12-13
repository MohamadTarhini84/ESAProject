<?php
//check if user is logged in

if(!isset($_SESSION['user'])){
  //user is not logged in
  //redirect to login page with Message
  $_SESSION['no-login-message']="<div class='error text-center'>Please login to access admin panel</div>";
  //redirect to login page
  echo "<h1>something went wrong</h1>";
  //header('location:'.SITEURL.'admin/index.php');
  header('location:http://localhost:80/suls/');
}
 ?>