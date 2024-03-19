<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .profile{
            margin:20px;
            margin-left:220px;
            /* position: absolute; */
        }
        .form-group{
          margin: 20px;
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
<?php
$query = "SELECT *FROM admin WHERE admin_id ='".$_SESSION['admin_id']."' ";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
  $name = $row['admin_name'];
  $email = $row['admin_email'];
  // $mobile = $row['mobile'];
  // $address = $row['address'];
}
  ?>
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
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" value="<?php echo $name; ?>" disabled>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" value="<?php echo $email; ?>" class="form-control" disabled>
        </div>
          <a type="submit" name="edit_profile" href="edit_profile.php" class="btn btn-primary">Edit profile</a>
          <a type="submit" href="change_password.php" class="btn btn-primary">Change password</a>
        </form>
      </div>
			<div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
