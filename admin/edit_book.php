<?php
require ("function.php");
include '../db.php';
$query = "select * from book where book_number = $_GET[bn]";
$query_run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $book_name = $row['book_name'];
    $book_no = $row['book_number'];
    $author_id = $row['author'];
    $cat_id = $row['category'];
    $book_price = $row['price'];
}
?>
<?php
	if(isset($_POST['update'])){
		$query = "update book set book_name = '$_POST[book_name]',author = '$_POST[author_id]',category = '$_POST[cat_id]',price = $_POST[book_price] where book_number = $_GET[bn]";
		$query_run = mysqli_query($conn,$query);
        if($query_run){
         header('location:manage_books.php');
        }	
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Issue Book</title>
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
            margin-bottom: 20px;
        }

        .dropdown {
            margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
        function alertMsg() {
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
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Books
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_book.php">Add book</a></li>
                    <li><a class="dropdown-item" href="manage_books.php">Manage books</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Delete</a></li> -->
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_cat.php">Add category</a></li>
                    <li><a class="dropdown-item" href="manage_cat.php">Manage categories</a></li>

                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
    <center><h4>Edit Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="mobile">Book Number:</label>
						<input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control" disabled required>
					</div>
					<div class="form-group">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Author ID:</label>
						<input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Category ID:</label>
						<input type="text" name="cat_id" value="<?php echo $cat_id;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Book Price:</label>
						<input type="text" name="book_price" value="<?php echo $book_price;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
    </div>   
</body>
</html>

