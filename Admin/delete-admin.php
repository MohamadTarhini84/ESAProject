<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>


<?php
    $id = $_GET['a_id'];
    //2. Created SQLQuery to delete Admin
    $sql = "DELETE  FROM  admins where id = $id ";
    //execute the query
    $res = mysqli_query($conn,$sql);

    if($res==true){
        //Query executed succesfully and admin deleted
        //Create session variable to display message
        $_SESSION['delete'] = "Admin Deleted Successfully";
        //redirect to admins page
        header('location:'.SITEURL.'admin/admins.php');
    }
    else {
        //Failed to delete admin
        $_SESSION['delete'] = "Failed to Delete Admin . try Again Later";
        header('location:'.SITEURL.'admin/admins.php');
    }
    //3. Redirect to admins page with message (sussec / error)

?>
