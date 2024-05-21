<?php
include '../db.php';
include 'function.php';

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
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
<style>
	.add{
		margin-top: 20px;
	}
</style>    
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
                  <form class="form-horizontal row-fluid" action="reg_cat.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Name/ID of category" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from category where cat_id='$s' or cat_name like '%$s%'";
                                        }
                                    else
                                        $sql="select * from category";

                                    $result=$conn->query($sql);
                                    $rowcount=mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    
                                    ?>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Category ID</th>
                                      <th>Category name</th>
                                      
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $catid=$row['cat_id'];
                                $name=$row['cat_name'];
                     
                            
                           
                            ?>
                                    <tr>
                                      <td><a a style="color:black;" href="cat_details.php?name=<?php echo $name;?>"><?php echo $catid ?></a></td>
                                      <td><a a style="color:black;" href="cat_details.php?name=<?php echo $name;?>"><?php echo $name ?></a></td>
                                      
                                        <td><center>
                                            <a href="edit_cat.php?catid=<?php echo $catid; ?>" class="btn btn-primary">Edit</a>
                                            <a href="delete_cat.php?catid=<?php echo $catid; ?>" class="btn btn-success">Delete</a>
                                        </center></td>
                                    </tr>
                               <?php }} ?>
                               </tbody>
                                </table>
								<div class="add"><center><a href="add_cat.php" class="btn btn-primary">Add Category</a></center></div>
								
							
                            </div>
                    <!--/.span9-->
					
                </div>
			
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2024 ByteBooks Library Management System </b>All rights reserved.
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
      
    </body>

</html>


