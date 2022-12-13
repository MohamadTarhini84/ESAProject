<?php
$conn=mysqli_connect('localhost','root','','esaproject1');
   
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM services WHERE id=$id");
    }
header('location:/ESAProject/Admin/services/service.php');
exit;
?>