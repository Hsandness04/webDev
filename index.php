<?php
require 'JwtHandler.php';
require 'connect.php';


$fname = $lname = $email = $phone = $ssn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST['first_name']);
    $lname = test_input($_POST['last_name']);
    $email = test_input($_POST['email']);

    $jwt = new JwtHandler();
    $token = $jwt->_jwt_encode_data(
        'http://localhost/php_jwt/',
        array("first_name"=>$fname,"last_name"=>$lname, "email"=>$email)
    );

    // Create new JwtHandler object to handle the incoming
    // token from jwtHandler.php. This retrieves the exp
    // value from the JWT so other pages can check if
    // the JWT is still valid or not.

    $jwt_time = new JwtHandler();
    $data =  $jwt_time->_jwt_decode_data(trim($token));

    var_dump($data);
    setcookie('token', $data, "/");
    echo header('Location: assessments.html');
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
