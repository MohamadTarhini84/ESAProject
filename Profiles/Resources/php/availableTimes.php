<?php
    include("db.php");


    $date=$_REQUEST['date'];
    $day=$_REQUEST['day'];
    $drID=1;

    $sql1="SELECT startTime, endTime FROM doctortimes WHERE doctorID=".$drID." AND dayOfWeek=".$day;
    $sql2="SELECT id, appTime FROM appointments WHERE doctorID=".$drID." AND appDate='".$date."'";

    $response=array();

    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $array1=array("startTime"=>$row1['startTime'], "endTime"=>$row1['endTime']);
    array_push($response,$array1);

    $result2=mysqli_query($conn,$sql2);
    if (mysqli_num_rows($result2) > 0) {
        $array2=array();
        // output data of each row
        while($row = mysqli_fetch_assoc($result2)) {
            $a=array(["appID"=>$row['id'],"appTime"=>$row['appTime']]);
            array_push($array2,$a);
        }
        array_push($response,$array2);
    }

    echo json_encode($response);

    mysqli_close($conn);
?>