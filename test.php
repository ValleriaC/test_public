<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "test_jenkins";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 $nume = $_POST['name'];
    $prenume = $_POST['lname'];
   

$sql = "INSERT INTO users (nume, prenume)
VALUES ($nume, $prenume)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>