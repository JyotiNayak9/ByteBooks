 <?php
 session_start();
function is_admin_login(){
    if($_SESSION ['admin_id']){
        return true;
    }else{
        return false;
    }
} 
