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

$sql = "SELECT id, name, father, Cgpa FROM Table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table style='width:100%;'><tr><th>Id</th>" .
	"<th>Name</th>" .
	"<th>Father Name</th>" .
	"<th>CGPA</th><th></th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . 
          $row["name"]. "</td><td>" . $row["father"]. "</td><td>" . $row["Cgpa"]. 
          "</td><td><a href='update.php?id=" . $row["id"]. "'>Update</a> <a href='delete.php?id=" . $row["id"]. "'>Delete</a></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
