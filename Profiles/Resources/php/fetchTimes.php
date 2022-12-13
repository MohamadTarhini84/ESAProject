<?php
    include("db.php");

    $drID=1;

    $sql = "SELECT * FROM doctortimes WHERE doctorID=".$drID;
    $result = mysqli_query($conn, $sql);

    $response=array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $times = array("day"=>$row['dayOfWeek'],"startTime"=> $row["startTime"], "endTime"=>$row["endTime"]);
          array_push($response, $times);
        }
        echo json_encode($response);
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
?>