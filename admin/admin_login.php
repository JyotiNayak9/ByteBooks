<?php
include_once '../db.php';
session_start();

$message = '';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    
    $formdata = array();
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
        
            $sql = "SELECT * FROM admin WHERE email='$admin_email'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
        
        
            if ($data) {
                if ($data['password'] == $admin_password) {
                    $_SESSION['admin_email'] = $admin_email;
                    header('location:admin_index.php');
                } else {
                    $message = '<li>Wrong Password</li>';
                }
            }else{
                $message = '<li>Wrong Email Address</li>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../user/style.css">

</head>
<body>
    <div class="container">
        <?php
        if($message != '')
        {
            echo'<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
        }
        ?>
        <form action="admin_login.php" method="POST">
<div class="form-group">
                <input type="text" class="form-control" name="admin_email" placeholder="Admin Email"><br>
</div>
<div class="form-group">
                <input type="password" class="form-control" name="admin_password" class="form control" placeholder="Password"><br>
</div>
<div class="form-btn">
    <input type="submit" class="btn btn-primary" value="Login" name="submit">
</div>
</form>
</body>
</html>
