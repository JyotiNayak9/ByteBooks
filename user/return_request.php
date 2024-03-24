<?php
require('../db.php');

$id=$_GET['id'];

$uid=$_SESSION['user_id'];

$sql="insert into return (user_id,book_num) values ('$uid','$id')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=current.php", true, 303);

}




?>