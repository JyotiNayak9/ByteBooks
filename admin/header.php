<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
      .flex-column{
          background: rgb(107, 56, 56);
          width: 200px;
          height: 90vh;    
          position:fixed;     
        }
        .nav-link{
          color: #fff;
        }
        .navbar {
            justify-content: space-between;
            width: 100%;
            position: ;
        }
        .navbar h2{
          font-family:"protest riot";
        }
        
    </style>
</head>
<body>
<?php
if(is_admin_login()) 
{
?>
<nav class="navbar" >
    <div class="logo" ><h2>ByteBooks</h2></div>
       </nav>
       <nav class="nav flex-column">
       <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
       <a class="nav-link" href="category.php">Categories</a>
       <a class="nav-link" href="logout.php">Log out</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</body>
 <?php
}
else{
  header('location:admin_login.php');
}
?> 


