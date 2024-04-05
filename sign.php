<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "example_database";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from form
$user_username = $_POST['username'];
$user_year = $_POST['year'];
$user_password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

// SQL query to insert user data into the database
$sql = "INSERT INTO students (username, year, password) VALUES (?, ?, ?)";

// Prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_username, $user_year, $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
