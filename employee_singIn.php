<?php




$fname = $lname = $email = $phone = $emp_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST['first_name']);
  $lname = test_input($_POST['last_name']);
  $email = test_input($_POST['email']);
  $phone = test_input($_POST['phone']);
  $emp_id = test_input($_POST['emp_id']);

  employee($fname, $lname, $email, $phone, $emp_id);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    function employee( $fname, $lname, $email, $phone, $emp_id) {
        require 'connect.php';

        // Captures employee sign ins that match the employee ID
        // first name and last name of the entry.

        $employee = "SELECT emp_id, first_name, last_name FROM employee WHERE emp_id = ? AND first_name = ? AND last_name = ?";
        //$employee = "SELECT emp_id, first_name, last_name FROM employee WHERE emp_id = ? AND first_name = ? AND last_name = ?";
        $check_stmt = $conn->prepare($employee);
        $check_stmt->execute([$emp_id, $fname, $lname]);
        $emp = $check_stmt->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($emp[0]['emp_id']);

        // If submitted emp_id, first_name and last_name matche the on in the
        // database then save an array of emp_id, first_name and last_name.
        
        if ($emp_id = $emp[0]['emp_id'] && $fname= $emp[0]['first_name'] && $lname = $emp[0]['last_name'] ) {
            
            require 'JwtHandler.php';

            $jwt = new JwtHandler();
            $token = $jwt->_jwt_encode_data(
                'http://localhost/php_jwt/',
                array("employeeID"=>$emp_id, "first_name"=>$fname,"last_name"=>$lname, "email"=>$email)
            );

            // Create new JwtHandler object to handle the incoming
            // token from jwtHandler.php. This retrieves the exp
            // value from the JWT so other pages can check if
            // the JWT is still valid or not.

            setcookie('user', $token, "/");
            echo header('Location: assessments.html');
            
        }
        else {
            echo header('Location: emp_needAdmin.html');
        }
    }


?>
