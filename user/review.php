<?php
include '../db.php';
include 'function.php';
if(isset($_POST['submit'])){
if(!is_user_login()){
    header('location:login.php');
}
else{
    $sql = "insert into review values ('$_POST[username]','$_POST[email]','$_POST[comment]')";
    $result = mysqli_query($conn,$sql);
}
if($result){

    echo"<script>alert('Thank you for your valuable feedback')</script>";
    header('location:index.php');
}
}

