<?php
require ('../db.php');
require ('function.php');
// session_start();
?>

<?php
if (is_user_login()) {

if(isset($_POST['submit']))
{
    $id = $_GET['id'];
    $name=$_POST['Name'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    // $password=$_POST['password'];

$sql1="update users set full_name='$name', course='$course', email='$email', phone='$phone'  where users.id='$id'";
$result = mysqli_query($conn,$sql1);
if($result === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=user_dashboard.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?> 

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link rel="stylesheet" href="home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap"
            rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <nav class="navbar">
                <div class="logo"><a href="user_index.php">
                        <h2>ByteBooks</h2>
                    </a></div>
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
                            <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li><a href="profile.php"><i class="menu-icon icon-user"></i>Profile </a></li>
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="history.php"><i class="menu-icon icon-tasks"></i>Previously Borrowed Books </a>
                                </li>
                              
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a>
                                </li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Details</h3>
                            </div>
                            <div class="module-body">


                                <?php
                                $id = $_SESSION['user_id'];
                                $sql="select * from users where id='$id'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['full_name'];
                                $course=$row['course'];
                                $email=$row['email'];
                                $phone=$row['phone'];
                                // $password=$row['password'];
                                ?>    
                    			
                                <form class="form-horizontal row-fluid" action="edit_student_details.php?id=<?php echo $id ?>" method="post">

                                    <div class="control-group">
                                        <label class="control-label" for="Name"><b>Name:</b></label>
                                        <div class="controls">
                                            <input type="text" id="Name" name="Name" value= "<?php echo $name?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                            <label class="control-label" for="Category"><b>Course:</b></label>
                                            <div class="controls">
                                                <select name = "course" tabindex="1" value="BCA" data-placeholder="Select course" class="span6">
                                                    <option value="<?php echo $course?>"><?php echo $course?> </option>
                                                    <option value="BCA">BCA</option>
                                                    <option value="BBA">BBA</option>
                                                    <option value="BSC.CSIT">BSC.CSIT</option>
                                                    <option value="BBM">BBM</option>
                                                </select>
                                            </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="EmailId"><b>Email Id:</b></label>
                                        <div class="controls">
                                            <input type="text" id="EmailId" name="email" value= "<?php echo $email?>" class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="MobNo"><b>Mobile Number:</b></label>
                                        <div class="controls">
                                            <input type="text" id="phone" name="phone" value= "<?php echo $phone?>" class="span8" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn btn-primary"><center>Update Details</center></button>
                                            </div>
                                        </div>                                                                     

                                </form>
                    		           
                        </div>
                        </div> 	
                    </div>

                </div>
            </div>

        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2024 ByteBooks Library Management System </b>All rights reserved.
            </div>
        </div>
        </body>
</html>
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
<?php
}else{
    header("location:login.php");
}
?>
 
