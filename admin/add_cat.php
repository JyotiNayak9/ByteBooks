<?php
	require("function.php");
    include '../db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add category</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<style>
        .form-group{
            padding: 10px;
     
        }
        .dashboard{
            margin:20px;
            margin-left:220px;
        }
        .b1{
          display: flex;
          margin-bottom: 30px;+
        }
        .dropdown{
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
    Manage Books
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_book.php">Add book</a></li>
    <li><a class="dropdown-item" href="#">Update book</a></li>
    <li><a class="dropdown-item" href="#">Delete</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Category
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_cat.php">Add category</a></li>
    <li><a class="dropdown-item" href="#">Remove category</a></li>

  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
Author
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="add_author.php">Add Author</a></li>
    <li><a class="dropdown-item" href="">Remove Author</a></li>
  </ul>
</div>
</div>

    <div class="add">
		<center><h4>Add category</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Category Id:</label>
						<input type="text" name="cat_id" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Category Name:</label>
						<input type="text" name="cat_name" class="form-control" required>
					</div>
					
					<button type="submit" name="add_cat" class="btn btn-primary">Add Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
    </div>
</body>
</html>

<?php
	if(isset($_POST['add_cat']))
	{
		$query = "insert into category values('$_POST[cat_id]','$_POST[cat_name]')";
		$query_run = mysqli_query($conn,$query);
	}
?>