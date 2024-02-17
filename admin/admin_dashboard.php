<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dashboard{
            margin:20px;
            margin-left:220px;
        }
        .b1{
          display: flex;
          margin-bottom: 30px;
        }
        .dropdown{
          margin-right: 10px;
        }
        .b2{
          display: flex;
flex-wrap: wrap;
flex-direction: row; 
/* justify-content: center; */
        }
        .card{
          margin: 30px;
          
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
include '../db.php';
include 'function.php';
include 'fns.php';

if(!is_admin_login()){
    header('location:admin_login.php');
}
?>
<body>
<?php
include 'header.php';
?>
<div class="dashboard">
  <div class="b1">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Manage Books
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Add book</a></li>
    <li><a class="dropdown-item" href="#">Update book</a></li>
    <li><a class="dropdown-item" href="#">Delete</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Category
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Add category</a></li>
    <li><a class="dropdown-item" href="#">Remove category</a></li>

  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Author
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Add Author</a></li>
    <li><a class="dropdown-item" href="#">Remove Author</a></li>
  </ul>
</div>
  </div>
  <div class="b2">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Users</h5>
    <p class="card-text">No. of total Users:<?php echo get_user_count(); ?></p>
    <a href="#" class="btn btn-primary">View Registered Users</a>
  </div>
  </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Books</h5>
    <p class="card-text">total no of registered books:</p>
    <a href="#" class="btn btn-primary">View Books</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered category</h5>
    <p class="card-text">Total no. of categories:</p>
    <a href="#" class="btn btn-primary">View categories</a>
  </div>
</div>
<div class="b2">
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Authors</h5>
    <p class="card-text">Total no. of registered authors:</p>
    <a href="#" class="btn btn-primary">View Authors</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Issued Books</h5>
    <p class="card-text">Total no. of books issued:</p>
    <a href="#" class="btn btn-primary">View Issued books</a>
  </div>
</div>
  </div>
</div>
</body>