<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/home.css">
    <title>Document</title>
    <style>
        .navbar {
            justify-content: center;
        }
    </style>
</head>
<?php
if(is_admin_login()) 
{

?>
<body>
<nav class="navbar" >
    <div class="logo" ><h2>ByteBooks</h2></div>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    </nav>
    <nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="admin_index.php">Profile</a>
  <a class="nav-link" href="logout.php">Log out</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</body>
<?php
}
else{
?>

<body>
    <nav class="navbar" >
    <div class="logo" ><h2>ByteBooks</h2></div> 
    </nav>
</body>

</html>
<?php
}
?>