<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .profile{
            margin:20px;
            margin-left:220px;
            position: absolute;
        }
    </style>
</head>
<?php
include '../db.php';
include 'function.php';


if(!is_admin_login()){
    header('location:admin_login.php');
}
?>
<body>
<?php
include 'header.php';
?>
<?php
$query = "SELECT *FROM admin WHERE admin_id ='".$_SESSION['admin_id']."' ";
$result = mysqli_query($conn,$query);
  ?>
<div class="profile">
<nav class="cont" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="profile.php">Profile</li>
  </ol>
</nav>
</div>
</body>
</html>
