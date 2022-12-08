<?php
    $errorMSG="Schedule Edited Successfully";

    if(isset($_POST['day'])){
        $day=$_POST['day'];
    } else{
        $errorMSG="an error occured";
        exit();
    }

    if(isset($_POST['startTime'])){
        $startTime=$_POST['startTime'];
    } else{
        $errorMSG="start time is required";
        exit();
    }

    if(isset($_POST['endTime'])){
        $endTime=$_POST['endTime'];
    } else{
        $errorMSG="end time is required";
        exit();
    }
    
    include("db.php");


    $stmt = mysqli_prepare($conn,"UPDATE times SET startTime=?, endTime =? WHERE id=1");
    mysqli_stmt_bind_param($stmt, "ss", $startTime, $endTime);
    mysqli_stmt_execute($stmt);

    mysqli_close($conn);

    echo json_encode(['code'=>'200', 'msg'=>$errorMSG]);
?>