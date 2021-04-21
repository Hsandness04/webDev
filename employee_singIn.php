<?php




$fname = $lname = $email = $phone = $ssn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST['first_name']);
  $lname = test_input($_POST['last_name']);
  $email = test_input($_POST['email']);
  $phone = test_input($_POST['phone']);
  $ssn = test_input($_POST['ssn']);

  employee($fname, $lname, $email, $phone, $ssn);
  insert_emp_info($email, $phone);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    function employee($fname, $lname, $email, $phone, $ssn) {
        include 'connect.php';

        $employee = "SELECT first_name, ssn FROM employee WHERE ssn = ?";
        $check_stmt = $conn->prepare($employee);
        $check_stmt->execute([$ssn]);
        $emp = $check_stmt->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($emp[0]["first_name"]);
        //var_dump($emp[0]["ssn"]);
        // If submitted ssn matches to one in the
        // database then save the array value first_name
        // in a variable to be used in the employee
        // sections of the website.
        
        if ($ssn = $emp[0]['ssn']) {
            session_start();

            $_SESSION["emp_name"] = $emp[0]['first_name'];
            //$_SESSION["emp_name"] = $_POST['first_name'];
            echo header('Location: emp_home.php');
        }
        else {
            echo 'No employee under that SSN exists, please contact admin for access';
        }
    }





/*
session_start();


$fname = $lname = $email = $phone = $ssn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST['first_name']);
  $lname = test_input($_POST['last_name']);
  $email = test_input($_POST['email']);
  $phone = test_input($_POST['phone']);
  $ssn = test_input($_POST['ssn']);

  employee($fname, $lname, $email, $phone, $ssn);
  insert_emp_info($email, $phone);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    function employee($fname, $lname, $email, $phone, $ssn) {
        include 'connect.php';

        $employee = "SELECT first_name, ssn FROM employees WHERE ssn = ?";
        $check_stmt = $conn->prepare($employee);
        $check_stmt->execute([$ssn]);
        $emp = $check_stmt->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($emp[0]["first_name"]);
        //var_dump($emp[0]["ssn"]);
        // If submitted ssn matches to one in the
        // database then save the array value first_name
        // in a variable to be used in the employee
        // sections of the website.
        
        if ($ssn = $emp[0]['ssn']) {
            
            $_SESSION["emp_name"] = $emp;
            echo header('Location: emp_home.html');
        }
        else {
            echo 'No employee under that SSN exists, please contact admin for access';
        }
    }
*/


?>
