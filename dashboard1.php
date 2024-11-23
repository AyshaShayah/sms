

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>School Management System</title>
</head>
<body>
    <header>
        <h1>School Management System</h1>
        <nav>
            <ul>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="AcceptTeacher.php">Teachers</a></li>
                <li><a href="AcceptStudent.php">Students</a></li>
                <li><a href="addclass.php">Courses</a></li>
                <li><a href="addArticle.php">Article</a></li>
                <li><a href="LogAdmin.php" >Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Administration Section</h2>
        <!-- Additional content goes here -->
    </main>
    <footer>
        <p>&copy; 2023 School Management System</p>
    </footer>
    
 
</body>
</html>
<style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

/* Header styles */
header {
    background: #35424a;
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    margin-bottom: 10px;
}

/* Navigation styles */
nav {
    background: #35424a;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #ffffff;
    text-decoration: none;
    padding: 10px 15px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background: #5a6f79;
    border-radius: 5px;
}

/* Main content styles */
main {
    padding: 20px;
    background: #ffffff;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

main h2 {
    margin-bottom: 20px;
}

/* Footer styles */
footer {
    text-align: center;
    padding: 10px 0;
    background: #35424a;
    color: #ffffff;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* Responsive styles */
@media (max-width: 600px) {
    nav ul li {
        display: block;
        margin-bottom: 10px;
    }
    
    nav ul li:last-child {
        margin-bottom: 0;
    }
}
</style>