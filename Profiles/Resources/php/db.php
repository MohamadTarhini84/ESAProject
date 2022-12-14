<?php
    $server='localhost';
    $name='root';
    $pass='';

    $conn=mysqli_connect($server, $name, $pass, 'abcd');

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>