<?php
/*function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "louieButters20!";
 $db = "huntersandness";
 //$conn = new PDO($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 */
 
 try {
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=huntersandness', 'root', 'louieButters20!');
    $customers = $conn->query("SELECT * FROM customers");
        foreach ($customers as $row) {
           /* while (i = 0;  strlen($row[i]) <  strlen($row); i++) {
                echo $row[i];
            }*/
            echo $row[0];
            echo $row[1];
            echo $row[2];
            echo $row[3];
            echo $row[4];
        }
    $fname = 'hunter';
    $lname = 'yavela';
    $phone = '6124252255';
    $email = 'ktobak16@gmail.com';

    $insert_customers = "INSERT INTO customers(first_name, last_name, phone, email) VALUES (?,?,?,?)";
    $conn->prepare($insert_customers)->execute([$fname, $lname, $phone, $email]);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "     ";
    die();
}
   
?>