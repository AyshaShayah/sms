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

// Prepare and execute the query
$stmt = $conn->prepare("SELECT * FROM teachers WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $teacher = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $teacher['password'])) {
        // Start session and set session variables
        session_start();
        $_SESSION['teacher_id'] = $teacher['teacher_id'];
        $_SESSION['teacher_name'] = $teacher['first_name'] . ' ' . $teacher['last_name'];
        // Redirect to teacher dashboard
        header("Location: dashboard2.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No account found with that email.";
}

// Close connections
$stmt->close();
$conn->close();
?>