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

$p1 = $_POST['cmobile'];
$p2 = $_POST['cpassword'];

$sql = "SELECT * FROM res_customer_master where cmobile='$p1' and cpassword='$p2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "Success";
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "invalud username or password";
}
$conn->close();
?>