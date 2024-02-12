<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
<div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"><br>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="password" class="form control" placeholder="Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Login" name="submit">
</div>
</form>
</body>
</html>
<?php
    include_once "db.php";
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $email=$_POST['email'];
        $password = $_POST['password']; 

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
    
    
        if ($data) {
            if ($data['password'] == $password) {
                $_SESSION['email'] = $data['email'];
                // header('location:index.php');
                echo"<script>alert('Login successful')</script>";
                exit();
            } else {
                echo "<script>alert('Password is incorrect')</script>";
                header('location:login.php');   
            }
        }
    }
?>
