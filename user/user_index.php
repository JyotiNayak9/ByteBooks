
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
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
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/17ed295021.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
 
<nav class="navbar">
    <div class="logo"><h2>ByteBooks</h2></div>              
      <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
              <li class="dropdownn">
                <a href="#" class="dropbtn">Categories</a>
                <div class="dropdown-content">
                  <?php
                  $sql = "select * from category";
                  $result = mysqli_query($conn,$sql);
                  if ($row= $result->fetch_assoc()){
                  ?>
                    <a class="catr" href=""><?php echo $row['cat_name'] ?></a>
                 <?php } ?>
                </div>
            </li>
            <!-- <li><a href="#">ContactUs</a></li> -->
            <li><a href="about.php">About</a></li>
            <li><a href="user_dashboard.php"><i class="fa-solid fa-user"></i></a></li>
                </div>
            </li>
          
        </ul>
        <!-- <div class="search">
          <input class="srch" type="search" name="" placeholder="Type to search ">
          <i class="fa-solid fa-magnifying-glass"></i>
      </div> -->
      </div>
  </nav>

  <div class="main-header">
    <div class="header">
        <h5> Bytebooks Library</h5>
        <h2> For All Your Reading Needs </h2>
        <p> Join us as we embark on a literary adventure together!With convenient access from anywhere, at any time, you can explore our extensive catalog, borrow books, and dive into captivating stories right from the comfort of your home.</p>
        <h2>Welcome,<?php echo $_SESSION['user_name'];?></h2>
  </div>
  
  </div>
</header>


<section class="banner">
<h4>Offer!!</h4>
<h2>Upto <span>5 % Off</span> - On Premium subscription</h2>
<button>Subscribe Now</button>
</section>
<section class="Categories">
  <div class="cat-row">
    <div class="cat-header">
      <h2>ByteBooks Features</h2>
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem culpa, quidem magni quasi deleniti modi, odit nisi molestias architecto eius reiciendis porro laudantium dolore dolorem. Quam eum ex consectetur sunt.</p> -->
    </div>
    <div class="cat1">
    <div class="cat-books">
        <?php
        // Fetch all books from the database
        $sql = "SELECT * FROM book";
        $result = $conn->query($sql);

        // Check if there are any books
        if ($result->num_rows > 0) {
            // Loop through each book and display it
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="../images/<?php echo $row['image']; ?>" class="card-img-top" alt="Book Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                        <!-- <p class="card-text"><?php echo $row['']; ?></p> -->
                        <a href="bookdetails.php?id=<?php echo $row['book_num'];?>" class="btn btn-primary">Explore more</a>
                    </div>
                </div>
                <?php
            }
        } else {
            // If no books found in the database
            echo "<p>No books found</p>";
        }
        ?>
    </div>
</div>
<!-- <div class="cat1">
    <div class="cat-books">
      <div class="card" style="width: 18rem;">
        <img src="../images/book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">E-library</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary" >Explore more</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="../images/notes.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Premium books</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary" >Explore more</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../images/book1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary" >Explore more</a>
        </div>
        </div>      
    </div>
    </div> --> 
  </div>
</section>
<section class="review">
        <h2>User review</h2>
        <form class="rev" action="review.php" method="post">
            <div class="formgroup">
                <label>Username</label>
                <input type="text" name="username" class="formcont">
            </div>
            <div class="formgroup">
                <label>Contact Email</label>
                <input type="text" name="email" class="formcont">
            </div>
            <div class="formgroup">
                <label>Comments</label>
                <textarea name="comment" class="formcont"></textarea>
            </div>
            <button type="submit" class="btn" name="submit" value="submit">Submit</button>               
        </form>
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
        <a href="about.php">About us</a>
        <a href="E-library.php">E-library</a>
        <a href="premium.php">Premimun collection</a>
    </div>
    <div class="col">
        <h4>My account</h4>
        <a href="register.php">Sign in</a>
        <a href="login.php">Login</a>
        <a href="user_dashboard.php">View Profile</a>
    </div>
</footer>

</body>
</html>