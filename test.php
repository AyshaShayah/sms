<?php
session_start();
if (!isset($_SESSION[' admin' ])) {
echo "‹script>
window. location.href='adminlogin-php'</script>";
}
?>
<IDOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-g">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="6.png" type="image/x-icon">

<link rel="stylesheet" href="https://fonts•googleapis.com/css?family=Source+Sans+Pro: 300,400,4001, 700& display=fallback"> 
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="plugins/daterangepicker/ daterangepicker.css"> 
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<I-- Left navar links -->
<ul class="navbar-nav">
<li class="nav-item" >
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<href="index-php" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
</li>
</ul>
<div class="mr-auto"></div>
<a href="logout-php" class="nav-link btn"> Logout</a>

</nav>

</div> </body> </html>
