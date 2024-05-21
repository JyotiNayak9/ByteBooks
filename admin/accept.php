<?php
require('../db.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];


$sql1="update record set date_of_issue=curdate(),due_date=date_add(curdate(),interval 1 day),renewal_left=1 where Book_num='$bookid' and user_id='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update book set availability=availability-1 where Book_num='$bookid'";
 $result=$conn->query($sql3);
 $sql5="insert into message (user_id,msg,date) values ('$rollno','Your request for issue of BookId: $bookid  has been accepted',curdate())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=issue_requests.php", true, 303);

}

