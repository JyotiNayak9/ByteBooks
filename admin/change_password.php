<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="home.css">
  <style>
    .profile {
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
include 'function.php';


if(!is_admin_login()){
    header('location:admin_login.php');
}
?>
<body>
<?php
include 'header.php';
?>

<body>
 <div class="profile">
    <nav class="cont" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="profile.php">Profile</li>
      </ol>
    </nav>
    <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update_password.php" method="post">
					<div class="form-group">
						<label for="password">Enter Password:</label>
						<input type="password" class="form-control" name="old_password">
					</div>
					<div class="form-group">
						<label for="New Password">Enter New Password:</label>
						<input type="password" name="new_password" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Password</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
  </div>
</body>
</body>

</html>