<?php
session_start();
	include '../db.php';
	$query =  "SELECT *FROM admin WHERE admin_id ='$_SESSION[admin_id]' ";
	$query_run = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($query_run);
	while ($row){
	$query = "update admin set admin_name = '$_POST[admin_name]',admin_email = '$_POST[admin_email]' ";
	$query_run = mysqli_query($conn,$query);
	}
 ?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "profile.php";
</script>