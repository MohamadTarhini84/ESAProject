<?php
include("db.php");

$content = trim(file_get_contents("php://input"));

$decoded = json_decode($content, true);
$data = [];
$data['id'] = $decoded['id'];
$data['desc'] = $decoded['desc'];

$id=$data["id"];
$desc=$data['desc'];
mysqli_query($conn, "UPDATE appointments SET appDesc='".$desc."' WHERE id=".$id);

mysqli_close($conn);
?>