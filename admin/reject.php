<?php
require('../db.php');

$bookid=$_GET['id1'];

$rollno=$_GET['id2'];

$sql="delete from record where user_id='$rollno' and book_num='$bookid'";

if($conn->query($sql) === TRUE)
{
	$sql1="insert into message (user_id,msg,date) values ('$rollno','Your request for issue of BookId: $bookid  has been rejected',curdate())";
 $result=$conn->query($sql1);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=issue_requests.php", true, 303);

}




?>