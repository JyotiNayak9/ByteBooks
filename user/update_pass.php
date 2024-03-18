<?php
	session_start();
	include "../db.php";
	$password = "";
	$query =  "SELECT *FROM users WHERE email ='" . $_SESSION['email'] . "' ";
    $query_run = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update users set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($conn,$query);
		?>
		<script type="text/javascript">
			alert("Updated successfully...");
			window.location.href = "user_dashboard.php";
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