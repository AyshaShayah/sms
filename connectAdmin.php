<?php
session_start();

// Database connection details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'school'; // Replace with your database name

// Create connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(isset($_POST['admin_username']) && $_POST['admin_username']!=""
        && isset($_POST['admin_password']) && $_POST['admin_password']!="")   
{
    $user=$_POST['admin_username'];
    $pass=$_POST['admin_password'];
    
    $query="Select * From admins where username='$user' and password='$pass'";
    
    $res= mysqli_query($con, $query);
    
    $nbrows= mysqli_num_rows($res);
    if($nbrows== 0)
    {
        header("Location:logAdmin.php");
    }
    else if($nbrows==1) {
       
        header("Location:dashboard1.php");
   
   }
   
   

}
?>
