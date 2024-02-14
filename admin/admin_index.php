<?php 
include '../db.php';
include 'function.php';

if(!is_admin_login()){
    header('location:admin_login.php');
}
include 'header.php';
// include 'side.php';
