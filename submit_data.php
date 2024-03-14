<?php
$servername = "sql204.infinityfree.com";
$username = "if0_36144812"; // Replace with your MySQL username
$password = "Deva8991"; // Replace with your MySQL password
$dbname = "if0_36144812_dynamicweb"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO dynamicweb (name, age) VALUES ('$name', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
