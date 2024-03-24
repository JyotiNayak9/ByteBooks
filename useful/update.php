<?php
session_start();
	include '../db.php';
	$query =  "SELECT *FROM users WHERE email ='" . $_SESSION['email'] . "' ";
	$query_run = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($query_run);
	while ($row){
	$query = "update users set full_name = '$_POST[name]',email = '$_POST[email]' ";
	$query_run = mysqli_query($conn,$query);
	}
 ?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>
