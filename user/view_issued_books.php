<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="home.css">
  <style>
    .b2 {
      margin: 20px;
      margin-left: 220px;
      /* position: absolute; */
    }
    .form-group{
      margin: 10px;
    }
  </style>
</head>
<?php
include '../db.php';
include 'user_dashboard.php';
// require 'function.php';
?>
<body>
<div class="b2">
<center><h4>Issued Book's Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Book number</th>
							<th>Book name</th>
                            <th>Issue date</th>
						</tr>
				
					<?php
                    $query ="select * from issued_books where user_id = $_SESSION[user_id]";
						$query_run = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['book_no'];?></td>
                            <td><?php echo $row['book_name'];?></td>
                            <td><?php echo $row['issue_date'];?></td>
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
