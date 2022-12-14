<?php
    include("db.php");

    $id=$_GET['id'];
    if($_GET['type']=='doc'){
      $where=" dr.id=".$id;
    } else{
      $where=" pat.id=".$id;
    }

    $sql = "SELECT appointments.id AS h, appointments.appDate AS a, appointments.appTime AS b, appointments.appDesc AS c, 
    appointments.isConfirmed AS d, doctordetails.room AS e, pat.fullName AS f, pat.phoneNumber as g, dr.fullName AS i,
    dr.phoneNumber AS j, doctordetails.speciality AS k
    FROM appointments 
    JOIN users dr ON dr.id=appointments.doctorID 
    JOIN users pat ON pat.id=appointments.patientID
    JOIN doctordetails ON dr.id=doctordetails.doctorID 
    WHERE ".$where;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $array=array();
        while($row = mysqli_fetch_assoc($result)) {
          $appointment = array("date"=> $row["a"], "time"=> $row['b'],
          "desc"=>$row['c'], "isConfirmed"=>$row['d'], "room"=>$row['e'],
          "name"=>$row['f'], "phone"=>$row['g'], "id"=>$row['h'], 
          "drName"=>$row['i'], "drPhone"=>$row['j'], "drSpec"=>$row['k']);
          array_push($array, $appointment);
        }
        echo json_encode($array);
    } else {
        $array=array("bob"=>-1);
        echo json_encode($array);
    }
      
      mysqli_close($conn);
?>