<?php
// Database connection
$servername = "localhost"; // Change if necessary
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "school"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$gender = $_POST['gender'];
$class = $_POST['class'];
$country = $_POST['country'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registrations (first_name, middle_name, last_name, email, password, gender, class, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $first_name, $middle_name, $last_name, $email, $password, $gender, $class, $country);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration submitted successfully. Please wait for admin approval.";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>