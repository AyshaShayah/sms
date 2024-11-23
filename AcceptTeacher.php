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

// Fetch pending teacher registrations
$result = $conn->query("SELECT * FROM teacher_registrations WHERE status = 'Pending'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['registration_id'] . " - Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
        echo "<form action='process_teacher_approval.php' method='POST'>
                <input type='hidden' name='registration_id' value='" . $row['registration_id'] . "'>
                <input type='submit' name='action' value='Approve'>
                <input type='submit' name='action' value='Reject'>
              </form><br>";
    }
} else {
    echo "No pending registrations.";
}

// Close connection
$conn->close();
?>