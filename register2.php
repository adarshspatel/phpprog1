<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adarsh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$p1 = $_POST['cname'];
$p2 = $_POST['cmobile'];
$p3 = $_POST['cemail'];
$p4 = $_POST['cpassword'];

$sql = "INSERT INTO res_customer_master (cname, cmobile, cemail, cpassword) VALUES ('$p1', '$p2', '$p3', '$p4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>