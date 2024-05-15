<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    .form{
        display: flex;
        /* justify-content: space-between; */
        /* margin: auto; */
    }
</style>
</head>
<?php
    include_once "../db.php";
    session_start();
    $message1 = '';
    if(isset($_POST['userlogin'])){
        $email=$_POST['email'];
        $password = $_POST['password']; 

        if(empty($_POST["email"]))
        {
            $message1 .= '<li>Enter Email address </li>';
        }
        else{
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            $message1 .='<li>Invalid Email Address</li>';
        }
     
        }
        if(empty($_POST['password'])){
            $message1 .= '<li>Enter your password</li>';
        }
    
        if($message1 == ''){

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
    
    
        if ($data) {
            if ($data['password'] == $password) {
                $_SESSION['email'] = $data['email'];
                $_SESSION['user_name'] = $data['full_name'];
                $_SESSION['user_id']=$data['id'];
                header('location:user_dashboard.php');
                echo"<script>alert('Login successful')</script>";
                exit();
            } else {
                $message1 .= '<li>Incorrect password</li>';   
            }
        }
        else{
            $message1 .= '<li>User not found</li>';
        }
    }
}

$message='';
if(isset($_POST['adminlogin'])){
    
    $admin_email=$_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    if(empty($_POST["admin_email"]))
    {
        $message .= '<li>Enter Email address </li>';
    }
    else{
        if(!filter_var($_POST["admin_email"],FILTER_VALIDATE_EMAIL))
    {
        $message .='<li>Invalid Email Address</li>';
    }
 
    }
    if(empty($_POST['admin_password'])){
        $message .= '<li>Enter your password</li>';
    }
   
    if($message == ''){
        
            $sql = "SELECT * FROM admin WHERE admin_email='$admin_email'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
        
        
            if ($data) {
                if ($data['password'] == $admin_password) {
                    $_SESSION['admin_id'] = $data['admin_id'];
                    $_SESSION['admin_email'] = $data['admin_email'];
                  
                    header('location:../admin/admin_dashboard.php');
                    exit;
                } else {
                    $message = '<li>Wrong Password</li>';
                }
            }else{
                $message = '<li>Wrong Email Address</li>';
            }
        }
    }

?> 

<div class="blur-bg"></div>
<body>
    <div class="form">
    <div class="container">
        <!-- <h2>Login Here</h2> -->
    <?php
        if($message1 != '')
        {
            echo'<div class="alert alert-danger"><ul>'.$message1.'</ul></div>';
        }
        ?><br>
        <form action="login.php" method="POST">
<div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"><br>
</div>
<div class="form-group">
                <input type="password" class="form-control" name="password" class="form control" placeholder="Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Login as user" name="userlogin"><br>
</div>
<span>Not registered yet?<a href="register.php">Register Here</a></span>
</form>
    </div>
<div class="container">
        <?php
        if($message != '')
        {
            echo'<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
        }
        ?>
        <form action="login.php" method="POST">
<div class="form-group">
                <input type="text" class="form-control" name="admin_email" placeholder="Admin Email"><br>
</div>
<div class="form-group">
                <input type="password" class="form-control" name="admin_password" class="form control" placeholder="Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Login as admin" name="adminlogin">
</div>
        </form>
</div>
</div>
</body>
</html>
