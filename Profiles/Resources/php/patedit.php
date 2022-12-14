<?php
    include("db.php");

    $errorMSG="";

    $sql="UPDATE users SET ";

    if(isset($_POST['name'])){
        $sql.=" fullName='".test_input($_POST['name'])."'";
    }else{
        $errorMSG.=" missing name";
    }

    if(isset($_POST['email'])){
        $sql.=", email='".test_input($_POST['email'])."'";
    } else{
        $errorMSG.=" missing email";
    }

    if(isset($_POST['phone'])){
        $sql.=", phoneNumber='".test_input($_POST['phone'])."'";
    } else{
        $errorMSG.=" missing phone number";
    }

    if(isset($_POST['pass'])){
        $sql.=", pass='".test_input($_POST['pass'])."'";
    } else{
        $errorMSG.=" missing password";
    }

    $sql.=" WHERE id=2";
    
    if(mysqli_query($conn,$sql)){
        $errorMSG.=" Table users Query Completed Successfully ";
    } else{
        $errorMSG=mysqli_error($conn);
    }

    mysqli_close($conn);

    echo json_encode(['code'=>'200', 'msg'=>$errorMSG]);
?>