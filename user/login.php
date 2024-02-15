<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<?php
    include_once "../db.php";
    session_start();
    $message = '';
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $email=$_POST['email'];
        $password = $_POST['password']; 

        if(empty($_POST["email"]))
        {
            $message .= '<li>Enter Email address </li>';
        }
        else{
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            $message .='<li>Invalid Email Address</li>';
        }
     
        }
        if(empty($_POST['password'])){
            $message .= '<li>Enter your password</li>';
        }
    
        if($message == ''){

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
    
    
        if ($data) {
            if ($data['password'] == $password) {
                $_SESSION['user_email'] = $data['email'];
                header('location:index.php');
                echo"<script>alert('Login successful')</script>";
                exit();
            } else {
                $message .= '<li>Incorrect password</li>';   
            }
        }
    }
}
?>
<div class="blur-bg"></div>
<body>
    <div class="container">
        <h2>Login Here</h2>
    <?php
        if($message != '')
        {
            echo'<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
        }
        ?><br>
        <form action="login.php" method="POST">
<div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"><br>
</div>
<div class="form-group">
                <input type="text" class="form-control" name="password" class="form control" placeholder="Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Login" name="submit"><br>
</div>
<span>Not registered yet?<a href="register.php">Register Here</a></span>
</form>
</body>
</html>
