<!Doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1stDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

</body>
</html>
