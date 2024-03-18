<?php
 session_start();
function is_user_login(){
    if($_SESSION ['email']){
        return true;
    }else{
        return false;
    }
} 