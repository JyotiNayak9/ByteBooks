<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .show{
            margin:20px;
            margin-left:220px;
            /* position: absolute; */
        }
    </style>
</head>
<?php
include '../db.php';
include 'function.php';
// include 'fns.php';

if(!is_admin_login()){
    header('location:admin_login.php');
}
	$query = "select * from book ";
?>
<body>
<?php
include 'header.php';
?>
<div class="show">
<center><h4>Registered Book's Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Name</th>
							<th>Category</th>
							<th>Author</th>
                            <th>Price</th>
							<th>Book number</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['book_name'];?></td>
                            <td><?php echo $row['category'];?></td>
							<td><?php echo $row['author'];?></td>
							<td><?php echo $row['price'];?></td>
							<td><?php echo $row['book_number'];?></td>
						</tr>

					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</div>
</body>
</html>