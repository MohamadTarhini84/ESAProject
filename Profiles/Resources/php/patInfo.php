<?php
    include("db.php");

    $sql = "SELECT * FROM users WHERE users.id=2";
    $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $user = array("name"=> $row["fullName"], "gender"=> $row['gender'],
      "birthday"=>$row['birthday'], "phone"=>$row['phoneNumber'], "email"=>$row['email']);
    }
  } else {
    echo "0 results";
  }

  echo json_encode($user);

  mysqli_close($conn);
?>