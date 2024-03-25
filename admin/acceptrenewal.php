<?php
require('../db.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];


$sql1="update record set due_date=date_add(due_date,interval 15 day),renewal_left=0 where book_num='$bookid' and user_id='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="delete from renew where book_num='$bookid' and user_id='$rollno'";
 $result=$conn->query($sql3);
 
 $sql5="insert into message (user_id,msg,date) values ('$rollno','Your request for renewal of book_num: $bookid  has been accepted',curdate())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=renew_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=renew_requests.php", true, 303);

}


?>