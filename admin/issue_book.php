<?php
	require("function.php");
    include '../db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issue Book</title>
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
          margin-bottom: 20px;
        }
        .dropdown{
          margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
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
		<center><h5>Issue Book</h5></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Book number:</label>
						<input type="text" name="book_number" class="form-control" required>
					</div>
                    <div class="form-group">
                    <label for="mobile">Book Name:</label>
						<input type="text" name="book_name" class="form-control" required>
					</div>
                   
					<div class="form-group">
						<label for="mobile">User ID:</label>
						<input type="text" name="user_id" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">User Name:</label>
						<input type="text" name="user_name" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="issue_date">Issue Date:</label>
						<input type="text" name="issue_date" class="form-control" value="<?php echo date("Y-m-d");?>" required>
					</div>
					<button type="submit" name="issue_book" class="btn btn-primary">Issue Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
    </div>

</body>
</html>

<?php
	if(isset($_POST['issue_book']))
	{
		$query = "insert into issued_books values($_POST[book_number],'$_POST[book_name]',$_POST[user_id],'$_POST[user_name]','$_POST[issue_date]')";
		$query_run = mysqli_query($conn,$query);
		#header("Location:admin_dashboard.php");
	}
?>