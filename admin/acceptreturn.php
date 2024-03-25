<?php
require('../db.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];
$dues=$_GET['id3'];



$sql1="update record set date_of_return=curdate(),dues='$dues' where Book_num='$bookid' and user_id='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update book set availability=availability+1 where book_num='$bookid'";
 $result=$conn->query($sql3);
 $sql4="delete from `return` where book_num='$bookid' and user_id='$rollno'";
 $result=$conn->query($sql4);
 $sql6="delete from renew where book_num='$bookid' and user_id='$rollno'";
 $result=$conn->query($sql6);
 $sql5="insert into message (user_id,msg,date) values ('$rollno','Your request for return of BookId: $bookid  has been accepted',curdate())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=return_requests.php", true, 303);

}





?>