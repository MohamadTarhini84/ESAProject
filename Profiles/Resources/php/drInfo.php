<?php
    include("db.php");

    $sql = "SELECT * FROM users JOIN doctordetails ON users.id=doctordetails.doctorID WHERE users.id=1;";
    $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $user = array("fname"=> $row["firstName"], "lname"=> $row["lastName"], "gender"=> $row['gender'],
      "birthday"=>$row['birthday'], "phone"=>$row['phoneNumber'], "room"=>$row['room'],
                  "licence"=>$row['licenceID'], "specialty"=>$row['speciality'], "email"=>$row['email']);
      echo json_encode($user);
    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
?>