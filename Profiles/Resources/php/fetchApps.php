<?php
    include("db.php");

    $sql = "SELECT appointments.appDate AS a, appointments.appTime AS b, appointments.appDesc AS c, 
    appointments.isConfirmed AS d, doctordetails.room AS e, pat.firstName AS f, pat.lastName AS g, pat.phoneNumber as h
    FROM appointments 
    JOIN users dr ON dr.id=appointments.doctorID 
    JOIN users pat ON pat.id=appointments.patientID
    JOIN doctordetails ON dr.id=doctordetails.doctorID 
    WHERE dr.id=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $array=array();
        while($row = mysqli_fetch_assoc($result)) {
          $appointment = array("date"=> $row["a"], "time"=> $row['b'],
          "desc"=>$row['c'], "isConfirmed"=>$row['d'], "room"=>$row['e'],
          "name"=>$row['f']." ".$row['g'], "phone"=>$row['h']);
          array_push($array, $appointment);
        }
        echo json_encode($array);
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
?>