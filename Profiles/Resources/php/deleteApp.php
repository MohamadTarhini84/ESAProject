<?php
include("db.php");

if(isset($_GET["id"])){
        $id=$_GET["del"];
        mysqli_query($conn, "DELETE FROM appointments WHERE id=".$id);
        header("location:../../../Profiles/doctorProfileEditable.html?id=".$_GET['id']."");
    }

mysqli_close($conn);
?>