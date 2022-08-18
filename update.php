<!Doctype html>
<html>
<head>
 <style>
	table, th, td {
	  border: 2px solid;
	}
 </style>
</head>
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

$sql = "INSERT INTO table1 (`name`, `father`, `cgpa`)
VALUES ('" . $_POST["name"] . "', '" . $_POST["father"] . "', " . $_POST["cgpa"] . ")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
