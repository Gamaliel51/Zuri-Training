<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $password = $_POST['password']; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password

    $file = '../storage/users.csv';
    $f = fopen($file, 'r');

    while(!feof($f)){
        $data = fgetcsv($f,  1000, ",");
        if(($data[1]==$email)){
            $data[2] = $password;
            fclose($f);

            $f = fopen($file, 'w');

            fputcsv($f, $data);
            header('Location: ../forms/login.html');
        }
    }
    print("User does not exist");
    
}
echo "HANDLE THIS PAGE";


