<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])){
    header('location: login_form.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">

<div class="content">
<h3>Rental vehicle management system</h3>
<br>
   <h3>Hi, <span>Admin</span></h3>
   <h1>Welcome <span> <?php echo $_SESSION['admin_name'] ?> </span></h1>
   <p>this an admin page</p>
   <a href="login_form.php" class="btn"> Login</a>
   <a href="register_form.php" class="btn"> Register</a>
   <a href="logout.php" class="btn"> Logout</a>
   <a href="cars.php" class="btn"> Home</a>
   
</div>

</div>

</body>
</html>