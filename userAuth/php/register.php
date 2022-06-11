<?php
include "../storage/users.csv";

if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $row = [$username, $email, $password];
    $file = "../storage/users.csv";

    $f = fopen($file, 'w');
    fputcsv($f, $row);

    fclose($f);

    print("User successfully registered");
    
    // echo "OKAY";
}
//echo "HANDLE THIS PAGE";

?>
