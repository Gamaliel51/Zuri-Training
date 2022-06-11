<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
    session_start();
    
    if (isset($_SESSION['username'])){
        print('here2');
        session_destroy();
        print("here");
        header('Location: ../forms/login.html');
    }
}

logout();
echo "HANDLE THIS PAGE";

?>