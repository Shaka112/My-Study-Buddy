<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

</head>
<body>
  <h1>The List of Users</h1>
  <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "bmcc";

    //creating connection 
    $conn = new mysqli ($servername, $username, $password, $dbname);
    //check connection 
    if ($conn -> connect_error){
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT userID, name, sex, age, email, phone FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "<table><tr><th>userID</th><th>Name</th><th>Sex</th><th>Age</th><th>Email</th><th>Phone</th></tr>";
      while($row = $result->fetch_assoc()) {    
      echo "<tr><td>$row[userID]</td><td>$row[name]</td><td>$row[sex]</td><td>$row[age]</td><td>$row[email]</td><td>$row[phone]</td></tr>";	
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
  ?>

  <br><br>
  <a href="index.html">Back to main menu</a>
</body>
</html>