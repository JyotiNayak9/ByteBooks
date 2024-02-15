<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet" href="home.css">
    <style>
    .flex-column{
    background: rgb(107, 56, 56);
    width: 200px;
    height: 90vh;    
    position:fixed;     
        }
        .nav-link{
          color: white;
        }
        </style>
</head>
<body>
<?php
include '../db.php';
include 'function.php';

if(!is_user_login()){
    header('location:login.php');
}else{
    include 'navbar.php';
?>
</nav>
       <nav class="nav flex-column">
       <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
       <a class="nav-link" href="category.php">Categories</a>
       <a class="nav-link" href="logout.php">Log out</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
<?php
}
?>
</body>
</html>