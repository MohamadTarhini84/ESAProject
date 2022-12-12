<?php
    include("db.php");

    $appID=$_REQUEST['id'];

    $sql="UPDATE appointments SET isConfirmed='1' WHERE id=".$appID;
    if (mysqli_query($conn, $sql)) {
        echo "confirmed successfully!";
      } else {
        echo "Error confirming appointment: " . mysqli_error($conn);
      }
      
    mysqli_close($conn);
?>