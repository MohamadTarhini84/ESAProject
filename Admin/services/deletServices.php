<?php
$conn=mysqli_connect('localhost','root','','services');
   
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM service WHERE id=$id");
    }
header('location:/ESAProject - Copy/Admin/services/service.php');
exit;
?>