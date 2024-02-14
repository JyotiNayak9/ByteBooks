<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<div class="blur-bg"></div>
<body>

    <div class="container">
        <h2>Register Here</h2>
        <form action="register.php" method="POST" id="registerForm" onsubmit="return validateForm()" >
            <div class="form-group">
                <input type="text" class="form-control"name="full_name" id="full_name" placeholder="Full Name" > <br>
                <span class="error" id="fullNameError"></span>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email"><br>
                <span class="error" id="emailError"></span>
</div>
<div class="form-group">
                <input type="password" class="form-control" name="password" class="form control" id="password" placeholder="Password"><br>
                <span class="error" id="passwordError"></span>
</div>
<div class="form-group">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Repeat Password" ><br>
                <span class="error" id="confirmPasswordError"></span>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Register" name="submit"><br>
</div>
<p>Already registered?<a href="login.php">Login here</a></p>
<script src="reg.js"></script>
</form>
    </div>

</body>
</html>

<?php
include("../db.php");
session_start();
 $message = '';
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(full_name,email,password) VALUES('$full_name','$email','$password')";
    mysqli_query($conn,$sql);
    $_SESSION['userEmail']="$email";
    echo '<script>alert("User registered successfully")</script>';
}