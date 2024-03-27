<?php
include '../db.php';
include 'function.php';
ob_start();
$query = "select * from category where cat_id = $_GET[catid]";
$query_run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $cat_name = $row['cat_name'];
     $cat_id = $row['cat_id'];
    
}
?>
<?php
	if(isset($_POST['update'])){
		$query = "update category set cat_name = '$_POST[cat_name]',cat_id = '$_POST[cat_id]' where cat_id = $_GET[catid]";
		$query_run = mysqli_query($conn,$query);
        if($query_run){
         header('location:reg_cat.php');
        }	
	}
?>
<?php


if(is_admin_login()){
    // header('location:admin_login.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../user/css/theme.css" rel="stylesheet">
        <link rel="stylesheet" href="../user/home.css">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="navbar navbar-fixed-top">
            <nav class="navbar">
    <div class="logo"><a href="user_index.php"><h2>ByteBooks</h2></a></div>              
    <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_dashboard.php">Your Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
            </nav>
      </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="../user/index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li><a href="profile.php"><i class="menu-icon icon-user"></i>Profile </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="reg_cat.php"><i class="menu-icon icon-edit"></i>Categories </a></li>
                                <li><a href="reg_author.php"><i class="menu-icon icon-edit"></i>Authors </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                               
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Book Details</h3>
                            </div>
                            <div class="module-body">

                                <?php
                                  
                                    $sql = "select * from category where cat_id='$cat_id'";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                


                                ?>

                                    <br >
                                    <form class="form-horizontal row-fluid" action="edit_cat.php?catid=<?php echo $cat_id ?>" method="post">
                                    <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title">Category ID:</label></b>
                                            <div class="controls">
                                                <input type="trxt" id="Title" name="cat_id" value= "<?php echo $cat_id?>" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title">Category Name:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Title" name="cat_name" value= "<?php echo $cat_name?>" class="span8" required>
                                            </div>
                                        </div>

                                       
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="update"class="btn">Update Details</button>
                                            </div>
                                        </div>

                                    </form> 
                                    </div>   
                                    </div>          
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 Library Management System </b>All rights reserved.
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

<?php
}
?>