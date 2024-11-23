<?php
include 'Conn.php';
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = isset($_SESSION['teacher_id']) ? $_SESSION['teacher_id'].
    $user_type = isset($_SESSION['teacher_id']) ? 'teacher'. 
    $class_id = $_POST['class_id'];
    $article_id = $_POST['article_id'];

    $stmt = $conn->prepare("INSERT INTO enrollments (user_id, user_type, class_id, article_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issi", $user_id, $user_type, $class_id, $article_id);

    if ($stmt->execute()) {
        echo "Enrollment successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch classes and articles for enrollment
$classes = $conn->query("SELECT * FROM classes");
$articles = $conn->query("SELECT * FROM articles");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enroll in Class and Article</title>
</head>
<body>
    <h1>Enroll in a Class and Article</h1>
    <form method="POST">
        Class: 
        <select name="class_id" required>
            <?php while ($row = $classes->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php endwhile; ?>
        </select><br>
        Article: 
        <select name="article_id" required>
            <?php while ($row = $articles->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <input type="submit" value="Enroll">
    </form>
    <a href="login.php">Back to Login</a>
</body>
</html>