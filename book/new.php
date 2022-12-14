<?php
class User
{
    public $id;
    public $name;
    public $email;
    public $age;
    public $phone;
    public $spec;
}
/* Receive the RAW post data. */
$content = trim(file_get_contents("php://input"));
require_once('../connect1.php');
/* $decoded can be used the same as you would use $_POST in $.ajax */
$decoded = json_decode($content, true);
$data = [];
$data['fetchval'] = $decoded['fetchval'];
$data['starttime'] = $decoded['starttime'];
$data['closetime'] = $decoded['closetime'];
$dataforsend = [];
$timestamp = strtotime($decoded['donedate']);
$day = date('l', $timestamp);
$data['donedate'] = $day;
// print_r($data['user']);
$sql = "SELECT name, email ,age ,phone ,pic, speciality
FROM users 
INNER JOIN doctordetail ON users.id=doctordetail.doctorid 
INNER JOIN timess ON users.id=timess.doctorid 
WHERE doctordetail.speciality='" . $data['fetchval'] . "'
and timess.day = '" . $data['donedate'] . "'
and timess.starttime <='" . $data['starttime'] . "'
and timess.endtime >'" . $data['closetime'] . "'

";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $a = new User();
        $a->name = $row['id'];
        $a->name = $row['name'];
        $a->email = $row['email'];
        $a->age = $row['age'];
        $a->phone = $row['phone'];
        $a->pic = $row['pic'];
        $a->spec = $row['speciality'];
        array_push($dataforsend, $a);
    }
}

// echo json_encode($a, $b);



echo json_encode($dataforsend);