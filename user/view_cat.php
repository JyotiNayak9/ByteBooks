<?php
include 'function.php';
include '../db.php';

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/17ed295021.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <style>
        .menu
        {
            margin-right: 150px;
        }
    </style>
  </head>
  </head>

  <body>
    
      <nav class="navbar">
        <div class="logo">
          <h2>ByteBooks</h2>
        </div>
        <div class="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdownn">
              <a href="#" class="dropbtn">Categories</a>
              <div class="dropdown-content">
                <?php
                $sql = "select * from category";
                $result = mysqli_query($conn, $sql);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['cat_id'];
                  $name = $row['cat_name'];
                  ?>
                  
                  <a class="catr" href="view_cat.php?name=<?php echo $name ?>"><?php echo $row['cat_name'] ?></a>
                <?php } ?>
              </div>
            </li>
            <!-- <li><a href="#">ContactUs</a></li> -->
            <li><a href="about.php">About</a></li>
            <li>
              <?php
            if(!is_user_login()){
              ?>
              <div class="dropdown1">
                <button class="dropbtn1"><i class="fa-solid fa-user"></i></button>
                <div class="dropdown-content1">
                  <a href="login.php">Login as User</a>
                  <a href="login.php">Login as Admin</a>
                </div>
              </div>
              <?php
            }else{
              ?>
              <li><a href="user_dashboard.php"><i class="fa-solid fa-user"></i></a></li>
              <?php
            }
            ?>
            </li>            
        </ul>
        </div>
        </nav>
        <section id="products">
    <div class="pro-container">
  
    <?php
                $x = $_GET['name'];
                $sql = "select * from book where book.category = '$x' ";
                $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                ?> 
                <div class="pro1">
                  <img src="../images/<?php echo $row['image']; ?>" class="card-img-top" alt="Book Image">
                  <div class="des">
                    <h5 ><?php echo $row['book_name']; ?></h5>
                    <a href="bookdetails.php?id=<?php echo $row['book_num']; ?>" class="btn btn-primary">Explore more</a>
                  </div>
                </div>
                <?php
              }
            }else {
                echo ("No books found");
            }
            ?>
    </div>
        