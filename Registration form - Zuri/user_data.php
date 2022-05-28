<?php
$name = $_POST['fullname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$row = [$name, $email, $dob, $gender, $country];

$filename = 'userdata.csv';

$f = fopen($filename, 'w');

fputcsv($f, $row);

fclose($f);

print_r($row);

?>