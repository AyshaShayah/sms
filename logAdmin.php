<?php include"connectAdmin.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="homec.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
    <div class="container">
        <a class="navbar-brand" href="#">SMS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-5">
    <h2>Admin Login</h2>
    <form method="POST">
        <input type="text" name="admin_username" class="form-control my-2" placeholder="Username" required>
        <input type="password" name="admin_password" class="form-control my-2" placeholder="Password" required>
        <input type="submit" class="btn btn-primary btn-block" value="Login">
    </form>
</main>

<footer class="bg-dark text-white mt-5">
    <div class="container">
        <div class="text-center">
            <p>&copy; 2023 School Management System. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    body{
        background-image:url("school.jfif") ;
        background-size: cover;
    }
    </style>
</body>
</html>