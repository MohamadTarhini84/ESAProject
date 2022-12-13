<?php
class User
{
    public $name;
    public $email;
    public $age;
    public $phone;
    public $spec;
}
/* Receive the RAW post data. */
$content = trim(file_get_contents("php://input"));
require_once('./conn.php');
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
INNER JOIN doctordetails ON users.id=doctordetails.doctorID
INNER JOIN doctortimes ON users.id=times.doctorID 
WHERE doctordetail.speciality='" . $data['fetchval'] . "'
and doctortimes.dayOfWeek > '" . $data['donedate'] . "'
and doctortimes.starttime <='" . $data['starttime'] . "'
and doctortimes.endtime >'" . $data['closetime'] . "'

";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $a = new User();
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