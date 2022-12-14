<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>
<?php
    if(isset($_GET['id'])){
        $drid = $_GET['id'];

    $sql2 = "DELETE  FROM  users where id = $drid ";
    //execute the query
    $res2 = mysqli_query($conn,$sql2);

    if($res2==true){
        
        $_SESSION['deleteApp'] = "Appointment Deleted Successfully";
        header('location:http://localhost:80/ESAProject/admin/appointments.php');

    }
    
    else {
        //Failed to delete admin

        $_SESSION['deleteApp'] = "Failed to Delete Appointment . try Again Later";
        header('location:'.SITEURL.'admin/appointments.php');
    }
    
}
?>