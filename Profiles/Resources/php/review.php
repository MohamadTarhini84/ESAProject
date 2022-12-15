<?php 
    include("db.php");

    session_start();

    $drID=$_POST['id'];
    $patID=$_SESSION['id'];
    $code="200";
    $errorMSG="An error occured!";
    $likes=rand(10,110);

    if(isset($_POST['rating'])){
        $rating=$_POST['rating'];
    } else{
        $rating='0';
    }
    if(isset($_POST['desc'])){
        $desc=test_input($_POST['desc']);
    } else{
        $desc="No description provided.";
    }

    $presql="SELECT * FROM reviews WHERE patientID=".$patID." AND doctorID=".$drID;
    $result = mysqli_query($conn, $presql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $code="201";
        $errorMSG="Duplicate Entry";
      } else {
        $sql="INSERT INTO reviews(doctorID,patientID,reviewDesc,rating,likes) VALUES(?,?,?,?,?);";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "iissi", $drID, $patID, $desc, $rating,$likes);
        mysqli_stmt_execute($stmt);
    }

    echo json_encode(['code'=>$code, 'msg'=>$errorMSG]);

    mysqli_close($conn);
?>