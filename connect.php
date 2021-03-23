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
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "     ";
}
   
?>
