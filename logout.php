<?php
function logout(){
    session_start();
    if($_SESSION['username']){
        session_destroy();
        header('Location: ../index.php');
    }
    
    else{
        echo "you are not logged in";
    }
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
}

echo "logout";
