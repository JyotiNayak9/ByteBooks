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
// include 'fns.php';

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
    Books
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_book.php">Add book</a></li>
    <li><a class="dropdown-item" href="manage_books.php">Manage books</a></li>
    <!-- <li><a class="dropdown-item" href="#">Delete</a></li> -->
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Category
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_cat.php">Add category</a></li>
    <li><a class="dropdown-item" href="manage_cat.php">Manage categories</a></li>

  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Author
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_author.php">Add Author</a></li>
    <li><a class="dropdown-item" href="manage_authors.php">Manage Authors</a></li>
  </ul>
</div>
<div class="dropdown">
  <a class="btn btn-secondary" type="button" href="issue_book.php" aria-expanded="false">
Issue book
</a>
</div>
  </div>
  <div class="b2">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Users</h5>
    <p class="card-text">No. of total Users:<?php echo get_user_count(); ?></p>
    <a href="reg_user.php" class="btn btn-primary">View Registered Users</a>
  </div>
  </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Books</h5>
    <p class="card-text">total no of registered books:<?php echo get_book_count(); ?></p>
    <a href="reg_books.php" class="btn btn-primary">View Books</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered category</h5>
    <p class="card-text">Total no. of categories:<?php echo get_category_count(); ?></p>
    <a href="reg_cat.php" class="btn btn-primary">View categories</a>
  </div>
</div>
<div class="b2">
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Registered Authors</h5>
    <p class="card-text">Total no. of registered authors:<?php echo get_author_count(); ?></p>
    <a href="reg_author.php " class="btn btn-primary">View Authors</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Issued Books</h5>
    <p class="card-text">Total no. of books issued:<?php echo get_issued_books_count(); ?></p>
    <a href="view_issued_books.php" class="btn btn-primary">View Issued books</a>
  </div>
</div>
  </div>
</div>
</body>