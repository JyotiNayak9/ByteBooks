<?php
require('../db.php');
session_start();
$id=$_GET['id'];

$uid=$_SESSION['user_id'];

$sql="insert into record (user_id,book_num) values ('$uid','$id')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=book.php", true, 303);

}




?>