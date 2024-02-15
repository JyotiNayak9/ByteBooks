<?php
 session_start();
function is_user_login(){
    if($_SESSION ['user_email']){
        return true;
    }else{
        return false;
    }
} 