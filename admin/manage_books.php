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
		<center><h4>Manage Books</h4></center>
        <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Author</th>
							<th>Category</th>
							<th>Book No.</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$query = "select * from book";
						$query_run = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['book_name'];?></td>
								<td><?php echo $row['author'];?></td>
								<td><?php echo $row['category'];?></td>
								<td><?php echo $row['book_number'];?></td>
								<td><?php echo $row['price'];?></td>
								<td><button class="btn" name=""><a href="edit_book.php?bn=<?php echo $row['book_number'];?>">Edit</a></button>
								<button class="btn"><a href="delete_book.php?bn=<?php echo $row['book_number'];?>">Delete</a></button></td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>	
    </div>
		</div>
    </div>

</body>
</html>


