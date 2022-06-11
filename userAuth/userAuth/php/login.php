<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //finish this line
    $password = $_POST['password']; //finish this

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file = '../storage/users.csv';
    $f = fopen($file, 'r');

    while(!feof($f)){
        $arr = fgetcsv($f,  1000, ",");

        $found = FALSE;

        if(($arr[1]==$email) && ($arr[2]==$password)){
            $found = TRUE;
            session_start();
            $_SESSION['username'] = $arr[0];
            header('Location: ../dashboard.php');
            break;
        }
    }
        if ($found == FALSE) {
            header('Location: ../forms/login.html');
        }

}

echo "HANDLE THIS PAGE";

?>