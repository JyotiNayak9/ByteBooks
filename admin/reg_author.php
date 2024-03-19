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
	$query = "select * from  author";
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
							<th>Id</th>
							<th>Author Name</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['author_id'];?></td>
                            <td><?php echo $row['author_name'];?></td>
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