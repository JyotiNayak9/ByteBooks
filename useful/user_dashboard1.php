<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet" href="home.css">
    <style>
    .flex-column{
    background:  #593021;
    width: 200px;
    height: 90vh;    
    position:fixed; 
    /* margin-top: 10px;     */
        }
        .nav-link{
          color: white;
        }
        .nav a{
          color: white;
        }
        .b2{
            margin:20px;
            margin-left:220px;
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
       <nav class="nav flex-column">
       <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
       <a class="nav-link" href="user_dash1.php">Dashboard</a>
       <a class="nav-link" href="logout.php">Log out</a>
  <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
</nav>

<?php
}
?>
</body>
</html>