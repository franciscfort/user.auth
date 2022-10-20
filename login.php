<?php
if(isset($_POST['submit'])){
    $username = "email"; 
    $password = "password";

loginUser($email, $password);

}

function loginUser($email, $password){
  
session_start();
if (! empty($_SESSION["username"])) {
    require_once './view/dashboard.php';
} else {
    require_once './view/login.php';

echo "BACK TO DASHBOARD";
}
?>
