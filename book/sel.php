<?php
class Dynamic
{
    public $speciality;
}
require_once('./connect1.php');
$content = trim(file_get_contents("php://input"));
$data = [];
$dataforsend = [];
$decoded = json_decode($content, true);
$data['fetchval'] = $decoded['fetchval'];

$sql = "SELECT DISTINCT speciality FROM doctordetail";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $s = new Dynamic();
        $s->speciality = $row['speciality'];

        array_push($dataforsend, $s);
    }
}


echo json_encode($dataforsend);