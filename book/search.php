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
require_once('../connect1.php');
/* $decoded can be used the same as you would use $_POST in $.ajax */
$decoded = json_decode($content, true);
$data = [];
$data['users'] = $decoded['users'];
$data['timefrom'] = $decoded['timefrom'];
$data['findtime'] = $decoded['findtime'];
$dataforsend = [];
$timestamp = strtotime($decoded['datenow']);
$day = date('l', $timestamp);
$data['datenow'] = $day;
// print_r($data['user']);
$sql = "SELECT fullName, email,birthday ,phoneNumber,speciality
FROM users 
INNER JOIN doctordetails ON users.id=doctordetails.doctorid 
INNER JOIN timess ON users.id=doctortimes.doctorid 
WHERE users.userType='102' and users.fullName ='" . $data['users'] . "'
and doctortimes.dayOfWeek > '" . $data['datenow'] . "'
and doctortimes.startTime <='" . $data['timefrom'] . "'
and doctortimes.endTime >'" . $data['findtime'] . "'

";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $a = new User();
        $a->name = $row['name'];
        $a->email = $row['email'];
        $a->age = $row['age'];
        $a->phone = $row['phone'];
        $a->spec = $row['speciality'];
        array_push($dataforsend, $a);
    }
}

// echo json_encode($a, $b);



echo json_encode($dataforsend);




// SELECT *
//   FROM table1
//   INNER JOIN table2
//   ON table1.id = table2.id
//   INNER JOIN table3
//   ON table2.id = table3.id;






// 
// and timess.starttime='" . $data['endtime'] . "'