<?php
// Fetch pending registrations
include 'Conn2.php'
;
$result = $conn->query("SELECT * FROM registrations WHERE status = 'Pending'");

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "<form action='aprroveStudent.php' method='POST'>
            <input type='hidden' name='registration_id' value='{$row['registration_id']}'>
            <input type='submit' name='action' value='Approve'>
            <input type='submit' name='action' value='Reject'>
          </form><br>";
}?>
