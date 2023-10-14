<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Management</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Employee Form</h2>

<form action="insert.php" method="post">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Address: <textarea name="address" required></textarea><br>
    Title: <input type="text" name="title" required><br>
    Salary: <input type="number" name="salary" required><br>
    <input type="submit" value="Save">
</form>

<!-- Here you will display the data. Use PHP to retrieve and display. -->
<h2>Current Employee Data</h2>

<table>
    <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Title</th>
        <th>Salary</th>
    </tr>
<?php
include 'config.php';

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["address"] . "</td><td>" . $row["title"] . "</td><td>" . $row["salary"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
$conn->close();


?>

   
</table>
<form action="clear_table.php" method="post" onsubmit="return confirm('Are you sure you want to clear all data?');">
    <input type="submit" value="Clear Table">
</form>
</body>
</html>

