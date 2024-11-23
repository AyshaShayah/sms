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
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch the student record
$stmt = $conn->prepare("SELECT * FROM students WHERE email = ? AND status = 'Active'");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Start session and log in the user
        session_start();
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['student_name'] = $row['first_name'] . ' ' . $row['last_name'];
        header("Location: dashboard3.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No active account found with that email.";
}

// Close connections
$stmt->close();
$conn->close();
?>