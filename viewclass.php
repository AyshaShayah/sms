<?php
include 'Conn.php';
session_start();

$classes = $conn->query("SELECT * FROM classes");
$articles = $conn->query("SELECT * FROM articles");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Classes and Articles</title>
</head>
<body>
    <h1>Available Classes</h1>
    <ul>
        <?php while ($row = $classes->fetch_assoc()): ?>
            <li><?php echo $row['name']; ?> - <?php echo $row['description']; ?></li>
        <?php endwhile; ?>
    </ul>

    <h1>Available Articles</h1>
    <ul>
        <?php while ($row = $articles->fetch_assoc()): ?>
            <li><?php echo $row['title']; ?> - <?php echo $row['content']; ?></li>
        <?php endwhile; ?>
    </ul>

    <a href="logTecher.php">Back to Login</a>
</body>
</html>