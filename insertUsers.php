<!DOCTYPE html>
<html>
<body>

<h2>Insert Client</h2>

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

$sql = "INSERT INTO Users (userID, name, sex, age, email, phone)
VALUES ('$userID', '$name', '$sex', '$age', '$email', '$phone')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="Index.html">Back to main menu</a>

</body>
</html>
