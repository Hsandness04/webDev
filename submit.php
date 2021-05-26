<?php




//$fname = $lname = $email = $phone = $ssn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Q1 = test_input($_POST['Q1']);
  $Q2 = test_input($_POST['Q2']);
  $Q3 = test_input($_POST['Q3']);
  $Q4 = test_input($_POST['Q4']);
  $Q5 = test_input($_POST['Q5']);
  $Q6 = test_input($_POST['Q6']);
  $Q7 = test_input($_POST['Q7']);
  $Q8 = test_input($_POST['Q8']);
  $Q9 = test_input($_POST['Q9']);
  $Q10 = test_input($_POST['Q10']);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>