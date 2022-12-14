<?php
include("db.php");

if($_GET["what"]=="del"){

if(isset($_GET["id"])){
        $id=$_GET["del"];
        mysqli_query($conn, "DELETE FROM appointments WHERE id=".$id);
        header("location:../../../Profiles/doctorProfileEditable.html?id=".$_GET['id']."");
    }
} else{
    if(isset($_GET["id"])){
        $id=$_GET["del"];
        $desc=$_POST['desc'];
        mysqli_query($conn, "UPDATE appointments SET appDesc=".$desc." WHERE id=".$id);
        header("location:../../../Profiles/patientProfile.html?id=".$_GET['id']."");
    }
}
mysqli_close($conn);
?>