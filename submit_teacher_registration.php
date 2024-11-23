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
$article = $_POST['article'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO teacher_registrations (first_name, middle_name, last_name, email, password, gender , class, country, article) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $first_name, $middle_name, $last_name, $email, $password, $gender, $class, $country, $article);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to a success page or show a success message
  echo"wait until the accpet";
    exit();
} else {
    // Handle error
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>