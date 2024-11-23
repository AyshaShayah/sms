<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="homec.css"> <!-- Link to your CSS file -->
</head>
<body>

<header class=" text-center py-4">
    <h1>Welcome to the School Management System</h1>
    <p>Your one-stop solution for managing school operations</p>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logAdmin.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logStudent.php">Student Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logTeacher.php">Teacher Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RegStudent.php">Student Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RegTeacher.php">Teacher Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-5">
    <h2>Welcome to the School Management System</h2>
    <p>Manage your school operations efficiently.</p>
</main>

<footer class="bg-dark text-white mt-5">
    <div class="container">
        <div class="contact-section py-4">
            <h4>Contact Us</h4>
            <form method="post">
                <input type="text" name="name" class="form-control my-2" placeholder="Your name" required>
                <input type="email" name="email" class="form-control my-2" placeholder="Your email" required>
                <input type="text" name="subject" class="form-control my-2" placeholder="Enter message subject" required>
                <textarea name="message" class="form-control my-2" placeholder="Your message" required style="height: 100px;"></textarea>
                <input type="submit" name="send" class="btn btn-info btn-lg my-3" value="Send A Message">
            </form>
        </div>
        <div class="text-center">
            <p>&copy; 2023 School Management System. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>
</body>
</html>