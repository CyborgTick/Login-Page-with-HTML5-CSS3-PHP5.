<?php
//define variables and set to empty values

$username = $password = " "

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    if (empty($username)) {
        return false;}
    if (empty($password)) {
        return false;}
} 

?>