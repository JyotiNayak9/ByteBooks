<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
       <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/17ed295021.js" crossorigin="anonymous"></script>
</head>
</head>
<body>
<header>
  <?php
include 'navbar.php';
  ?>

  <div class="main-header">
    <div class="header">
        <h5> Bytebooks Library</h5>
        <h2> For All Your Reading Needs </h2>
        <p> Hello Jyoti, I am prerana kafle, recently studying BCA in 4th semester. So,
            I'm studying BCA but not interested in coding heheheh. </p>
        <a href="login.php" class="btn"> Login </a>

        <a href="register.php" class="btn"> Sign up now </a>
        
  </div>
  
  </div>
</header>
<section class="Categories">
  <div class="cat-row">
    <div class="cat-header">
      <h2>Books categories</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem culpa, quidem magni quasi deleniti modi, odit nisi molestias architecto eius reiciendis porro laudantium dolore dolorem. Quam eum ex consectetur sunt.</p>
    </div>

    <div class="cat-books">
      <div class="card" style="width: 18rem;">
        <img src="../images/book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary" >Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</section>
  <footer>
    <div class="col">
       
        <h4>Contact</h4>
        <p><strong>Address:</strong> Balkumari, lalitpur</p>
        <p><strong>Phone:</strong> 01-2222222</p>
        <p><strong>Hours:</strong>9:00 - 18:00, Sun - Fri</p>
        <p><strong>Email:</strong>bytebooks@gmail.com</p>
    </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="index.php">Home</a>
        <a href="about1.html">About us</a>
        <a href="E-library.php">E-library</a>
        <a href="premium.php">Premimun collection</a>
    </div>
    <div class="col">
        <h4>My account</h4>
        <a href="register.php">Sign in</a>
        <a href="login.php">Login</a>
        <a href="#">View Profile</a>
    </div>
</footer>
</body>
</html>