<?php
    include("db.php");

    session_start();

    if(isset($_SESSION['id'])){

      $id=$_SESSION['id'];
      $type=$_SESSION['type'];

      $sql = "SELECT fullName, id FROM users WHERE id=".$id;
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $c=array("name"=>$row['fullName'],"id"=>$row['id'],"type"=>$type);
            echo json_encode($c);
          }
        } else {
          echo "0 results";
        }
    } else {
      echo json_encode(["bob"=>-1]);
    }
      
      mysqli_close($conn);
?>