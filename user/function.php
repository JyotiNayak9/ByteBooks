<?php
 session_start();
function is_user_login(){
    if($_SESSION ['email']){
        return true;
    }else{
        return false;
    }
} 
function get_user_issued_book(){
    include '../db.php';
    $user_issuedbook_count ="";
    $sql = "SELECT count(*)  as user_issuedbook_count from issued_books where user_id= '$_SESSION[user_id]'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $user_issuedbook_count = $row['user_issuedbook_count'];
    }
    return($user_issuedbook_count);
}