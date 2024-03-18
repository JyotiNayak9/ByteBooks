 <?php
 session_start();
function is_admin_login(){
    if($_SESSION ['admin_id']){
        return true;
    }else{
        return false;
    }
} 
function get_user_count(){
    include '../db.php';
    $user_count ="";
    $sql = "SELECT count(*)  as user_count from users";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $user_count = $row['user_count'];
    }
    return($user_count);
}

