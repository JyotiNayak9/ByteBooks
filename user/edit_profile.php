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

    .butn {
      background-color: #593021;
      padding: 10px 20px;
      color: white;
      border-radius: 30px;
      font-size: 18px;
      margin-top: 10px;
      transition: all .5s;
      border: 1px solid #593021;
    }

    .butn:hover {
      background: #fff;
      color: #86522D;
    }
    .form-group{
      margin: 10px;
    }
    .butns{
      margin-top: 20px;
    }
  </style>
</head>
<?php
include '../db.php';
include 'user_dashboard.php';
?>

<body>
  <?php
  $query = "SELECT *FROM users WHERE email ='" . $_SESSION['email'] . "' ";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['full_name'];
    $email = $row['email'];
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
      <form action="update.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" value="<?php echo $email; ?>" class="form-control" name="email">
        </div>
        <!-- <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" value="<?php echo $mobile; ?>" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" value="<?php echo $address; ?>" class="form-control" disabled>
          </div> -->
          <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
        </div>
			<div class="col-md-4"></div>
    </div>
  </div>
</body>

</html>