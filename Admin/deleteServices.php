<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>
<?php   
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM services WHERE id=$id");
        $_SESSION['deleteSer']="Service Deleted Successfully";
        header('location:/ESAProject/Admin/service.php');
    }
    else{
        $_SESSION['deleteSer'] = "Failed to Delete doctor . try Again Later";
        header('location:/ESAProject/admin/service.php');
    }
    

?>