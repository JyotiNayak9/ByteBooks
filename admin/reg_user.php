<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .show{
            margin:20px;
            margin-left:220px;
            /* position: absolute; */
        }
    </style>
</head>
<?php
include '../db.php';
include 'function.php';
// include 'fns.php';

if(!is_admin_login()){
    header('location:admin_login.php');
}
	// session_start();
	$name = "";
	$email = "";
	$query = "select * from users";

?>
<body>
<?php
include 'header.php';
?>
<div class="show">
<h4>Registered Users Detail</h4><br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form>
            <table class="table-bordered" width="900px" style="text-align: center">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
        
            <?php
                $query_run = mysqli_query($conn,$query);
                while ($row = mysqli_fetch_assoc($query_run)){
                    $name = $row['full_name'];
                    $email = $row['email'];
            ?>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                </tr>
            <?php
                }
            ?>	
        </table>
        </form>
</div>
</div>
</body>
</html>