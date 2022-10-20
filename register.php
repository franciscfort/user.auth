<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $fp = fopen('users.csv', 'a+');
fputcsv($fp, $username, $email, $password);
fclose($fp);
    // echo "OKAY";
}
echo "User Successfully Registered";


