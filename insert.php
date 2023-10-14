<?php
include 'config.php';

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and escape form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$salary = mysqli_real_escape_string($conn, $_POST['salary']);

$sql = "INSERT INTO employees (name, age, address, title, salary)
VALUES ('$name', '$age', '$address', '$title', '$salary')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the form page
header("Location: index.php");

?>

