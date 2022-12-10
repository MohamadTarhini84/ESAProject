<?php
    include("db.php");

    $sql = "SELECT * FROM users JOIN doctordetails ON users.id=doctordetails.doctorID WHERE users.id=1;";
    $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $user = array("name"=> $row["fullName"], "gender"=> $row['gender'],
      "birthday"=>$row['birthday'], "phone"=>$row['phoneNumber'], "room"=>$row['room'],
                  "licence"=>$row['licenceID'], "specialty"=>$row['speciality'], "email"=>$row['email']);
    }
  } else {
    echo "0 results";
  }

  $sql2="SELECT AVG(rating) AS rating FROM reviews WHERE patientID=2";
  $result1 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
      $user['rating']=$row['rating'];
    }
  } else {
    $user['rating']=0;
  }

  echo json_encode($user);

  mysqli_close($conn);
?>