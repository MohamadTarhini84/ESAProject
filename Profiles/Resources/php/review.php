<?php 
    include("db.php");

    $drID=1;
    $patID=2;
    $code="200";

    if(isset($_POST['rating'])){
        $rating=$_POST['rating'];
    }
    if(isset($_POST['desc'])){
        $desc=test_input($_POST['desc']);
    } else{
        $desc="No description provided.";
    }

    $presql="SELECT * FROM reviews WHERE patientID=".$patID;
    $result = mysqli_query($conn, $presql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $code="201";
        $errorMSG="Duplicate Entry";
      } else {
        $sql="INSERT INTO reviews(doctorID,patientID,reviewDesc,rating) VALUES(".$drID.",".$patID.",'".$desc."','".$rating."');";
        
        if(mysqli_query($conn,$sql)){
            $errorMSG="Query Completed Successfully ";
        } else{
            $errorMSG=mysqli_error($conn);
            $code="201";
        }
    }

    

    echo json_encode(['code'=>$code, 'msg'=>$errorMSG]);
?>