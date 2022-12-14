<?php
    include("db.php");

    session_start();
    $id=$_SESSION['id'];

    $errorMSG="";

    $sql="UPDATE users SET ";
    $sql2="UPDATE doctordetails SET ";

    if(isset($_POST['name'])){
        $sql.=" fullName='".test_input($_POST['name'])."'";
    }else{
        $errorMSG.=" missing name";
    }

    if(isset($_POST['licence'])){
        $sql2.=" licenceID='".test_input($_POST['licence'])."'";
    } else{
        $errorMSG.=" missing licence ID";
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

    if(isset($_POST['spec'])){
        $sql2.= ",speciality='".test_input($_POST['spec'])."'";
    } else{
        $errorMSG.=" missing specialty";
    }

    if(isset($_POST['room'])){
        $sql2.=", room='".test_input($_POST['room'])."'";
    } else{
        $errorMSG.=" missing room";
    }

    $sql.=" WHERE id=".$id;
    $sql2.=" WHERE doctorID=".$id;
    
    if(mysqli_query($conn,$sql)){
        $errorMSG.=" Table users Query Completed Successfully ";
    } else{
        $errorMSG=mysqli_error($conn);
    }

    if(mysqli_query($conn,$sql2)){
        $errorMSG.=" Table doctorDetails Query Completed Successfully ";
    } else{
        $errorMSG="An error occured: ".mysqli_error($conn);
    }

    mysqli_close($conn);

    echo json_encode(['code'=>'200', 'msg'=>$errorMSG]);
?>