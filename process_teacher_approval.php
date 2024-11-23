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

// Get the registration ID and action from the form submission
$registration_id = $_POST['registration_id'];
$action = $_POST['action'];

// Check the action and update the registration status accordingly
if ($action == 'Approve') {
    // Approve the registration
    $stmt = $conn->prepare("UPDATE teacher_registrations SET status = 'Approved' WHERE registration_id = ?");
    $stmt->bind_param("i", $registration_id);
    if ($stmt->execute()) {
        // Move approved registration to teachers table
        $stmt = $conn->prepare("INSERT INTO teachers (first_name, middle_name, last_name, email, password, gender, class, country, article, status) SELECT first_name, middle_name, last_name, email, password, gender, class, country, article, 'Active' FROM teacher_registrations WHERE registration_id = ?");
        $stmt->bind_param("i", $registration_id);
        $stmt->execute();
    }
} elseif ($action == 'Reject') {
    // Reject the registration
    $stmt = $conn->prepare("UPDATE teacher_registrations SET status = 'Rejected' WHERE registration_id = ?");
    $stmt->bind_param("i", $registration_id);
    $stmt->execute();
}

// Close connections
$stmt->close();
$conn->close();

// Redirect back to admin panel or show a success message
header("Location: dashboard1.php?message=Teacher registration processed successfully");
exit();
?>