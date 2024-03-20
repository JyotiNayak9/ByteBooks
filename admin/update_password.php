<?php
	session_start();
	include "../db.php";
	$password = "";
	$query =  "SELECT *FROM admin WHERE admin_email ='" . $_SESSION['admin_email'] . "' ";
    $query_run = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update admin set password = '$_POST[new_password]' where admin_email = '$_SESSION[admin_email]'";
		$query_run = mysqli_query($conn,$query);
		?>
		<script type="text/javascript">
			alert("Updated successfully...");
			window.location.href = "admin_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Wrong User Password...");
			window.location.href = "change_password.php";
		</script>
		<?php
	}
?>