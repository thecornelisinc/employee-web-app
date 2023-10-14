<?php
include 'config.php';

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "TRUNCATE TABLE employees";

if ($conn->query($sql) === TRUE) {
    echo "Table cleared successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

// Redirect back to the data page
header("Location: index.php");
?>

