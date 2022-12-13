<?php
    include("db.php");


    $sql = "SELECT fullName, id FROM users WHERE users.id=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $a=$row['fullName'];
          $b=$row['id'];
            $c="<img src=\"./Resources/Images/doctor.jpg\"></a>
            <a href=\"\">{$a}</a>";
          echo json_encode($c);
        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
?>