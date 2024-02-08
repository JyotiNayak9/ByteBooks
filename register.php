<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <form action="register.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control"name="fullname" placeholder="Full Name"> <br>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"><br>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="password" class="form control" placeholder="Password"><br>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Register" name="submit">
</div>
</form>
</body>
</html>

<?php
include("db.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql="INSERT INTO users(id,full_name,email,password) VALUES('id', '$name','$email','$password')";
    mysqli_query($conn,$sql);
    $_SESSION['userEmail']="$email";
    
}
?>