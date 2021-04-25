<?php
require 'JwtHandler.php';
require '../connect.php';



$fname = $lname = $email = $phone = $ssn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST['first_name']);
    $lname = test_input($_POST['last_name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $ssn = test_input($_POST['ssn']);

    $jwt = new JwtHandler();
    $token = $jwt->_jwt_encode_data(
        'http://localhost/php_jwt/',
        array("first_name"=>$fname,"last_name"=>$lname, "email"=>$email, "phone"=>$phone, "ssn"=>$ssn)
    );
    echo "<strong>Your Token is -</strong><br> $token";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }