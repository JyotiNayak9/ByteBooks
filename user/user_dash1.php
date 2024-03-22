<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="home.css">
  <style>
    .b2 {
      margin: 20px;
      margin-left: 220px;
      /* position: absolute; */
    }
    .form-group{
      margin: 10px;
    }
  </style>
</head>
<?php
include '../db.php';
include 'user_dashboard.php';
// require 'function.php';
?>
<body>
<div class="b2">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Issued Books</h5>
    <p class="card-text">No. of Issued books:<?php echo get_user_issued_book();?></p>
    <a href="view_issued_books.php" class="btn btn-primary">View issued books</a>
  </div>
  </div>
</body>
