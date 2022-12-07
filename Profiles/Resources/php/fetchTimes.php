<?php
    include("db.php");

    $sql = "SELECT * FROM times WHERE doctorID=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $times = array("startTime"=> $row["startTime"], "endTime"=>$row["endTime"]);
          echo json_encode($times);
        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
?>