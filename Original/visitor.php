<?php
$servername = "setapproject.org";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *
	FROM shevchuk
	WHERE gpa > 3.25";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["studentId"]. " - Name: " . $row["name"] . " GPA: " . $row["gpa"]." Age: " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
