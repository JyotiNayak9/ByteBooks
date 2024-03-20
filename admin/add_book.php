<?php
require ("function.php");
include '../db.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Add New Book</title>
  <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
  <style>
    .form-group {
      padding: 10px;

    }

    .dashboard {
      margin: 20px;
      margin-left: 220px;
    }

    .b1 {
      display: flex;
      margin-bottom: 30px;
      +
    }

    .dropdown {
      margin-right: 10px;
    }
  </style>
</head>

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
  </div>
  <div class="add">
    <center>
      <h4>Add a new Book</h4><br>
    </center>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Book number:</label>
            <input type="text" name="book_number" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="book_categoty">category:</label>
            <select class="form-control" name="book_category">
              <option>-Select category-</option>
              <?php
              $query = "select cat_name from category";
              $query_run = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <option>
                  <?php echo $row['cat_name']; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="mobile">Book Name:</label>
            <input type="text" name="book_name" class="form-control" required>
          </div>
          <div class="form-group">
						<label for="book_author">Author:</label>
						<select class="form-control" name="book_author">
							<option>-Select author-</option>
							<?php  								
								$query = "select author_name from author";
								$query_run = mysqli_query($conn,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['author_name'];?></option>
									<?php
								}
							?>
						</select>
						</div>
          <div class="form-group">
            <label for="mobile">Book Price:</label>
            <input type="text" name="book_price" class="form-control" required>
          </div>
          <button type="submit" name="add_book" class="btn btn-primary">Add Book</button>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

</body>

</html>

<?php
if (isset ($_POST['add_book'])) {
  $query = "insert into book values('$_POST[book_number]','$_POST[book_name]','$_POST[book_author]','$_POST[book_category]','$_POST[book_price]')";
  $query_run = mysqli_query($conn, $query);
}
?>