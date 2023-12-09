<!DOCTYPE html>
<html>
<body>

<h2>Update Client</h2>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bmcc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$userID = $_POST["userID"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "SELECT userID, name, age, email, phone FROM Users WHERE userID = '$userID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row   	  
	$sql = "UPDATE User SET name = '$name', age = '$age', sex = '$sex', email = '$email',  phone = '$phone' WHERE userID = '$userID'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Client does not exist!";
}

$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
