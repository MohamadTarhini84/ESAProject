<?php
    include("db.php");
    
    $id=$_GET['id'];

    if($_GET['type']=='doc'){
      $where=" dr.id=".$id;
    } else{
      $where=" pat.id=".$id;
    }

    $sql = "SELECT dr.fullName as a, pat.fullName as b, reviews.patientID as c, reviews.doctorID as d,
    reviews.reviewDesc as e, reviews.rating as f, reviews.likes as g, reviews.id as h
    FROM reviews 
    JOIN users dr ON dr.id=reviews.doctorID 
    JOIN users pat ON pat.id=reviews.patientID
    JOIN doctordetails ON dr.id=doctordetails.doctorID 
    WHERE ".$where;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $array=array();
        while($row = mysqli_fetch_assoc($result)) {
          $appointment = array("drName"=> $row["a"], "patName"=> $row['b'],
          "patID"=>$row['c'], "drID"=>$row['d'], "desc"=>$row['e'],
          "rating"=>$row['f'], "likes"=>$row['g'], "revID"=>$row['h']);
          array_push($array, $appointment);
        }
        echo json_encode($array);
    } else {
        $array=array("bob"=>-1);
        echo json_encode($array);
    }
      
      mysqli_close($conn);
?>