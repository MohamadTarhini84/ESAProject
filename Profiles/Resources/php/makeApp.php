<?php 
    include("db.php");

    session_start();

    $drID=$_POST['id'];
    $patID=$_SESSION['id'];
    $code="200";
    $errorMSG="An error occured!";

    $date=$_POST['date'];
    $time=$_POST['time'];
    if($_POST['desc']!=NULL){
        $desc=test_input($_POST['desc']);
    } else{
        $desc="No description provided.";
    }

    $presql="SELECT * FROM appointments WHERE patientID=".$patID." AND doctorID=".$drID;
    $result = mysqli_query($conn, $presql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $code="201";
        $errorMSG="Duplicate Entry";
      } else {
        // $sql="INSERT INTO appointments(doctorID,patientID,appDate,appTime,appDesc,isConfirmed) VALUES(?,?,?,?,?,?);";
        // $stmt = mysqli_prepare($conn,$sql);
        // mysqli_stmt_bind_param($stmt, "iissss", $drID, $patID, $date, $time, $desc, '0');
        // mysqli_stmt_execute($stmt);
        mysqli_query($conn,"INSERT INTO appointments(doctorID,patientID,appDate,appTime,appDesc,isConfirmed) 
        VALUES(".$drID.",".$patID.",'".$date."','".$time."','".$desc."','0');");
    }

    echo json_encode(['code'=>$code, 'msg'=>$errorMSG]);

    mysqli_close($conn);
?>