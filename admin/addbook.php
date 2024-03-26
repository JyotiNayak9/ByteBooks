<?php
include '../db.php';
include 'function.php';

if (is_admin_login()) {
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
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap" rel="stylesheet">
            
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
                                <li class="active"><a href="../user/index.php"><i class="menu-icon icon-home"></i>Home
                                    </a></li>
                                <li><a href="profile.php"><i class="menu-icon icon-user"></i>Profile </a></li>
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a>
                                </li>

                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a>
                                </li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->

                    <div class="span9">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>Add Book</h3>
                                </div>
                                <div class="module-body">


                                    <br>

                                    <form class="form-horizontal row-fluid" action="addbook.php" method="post">
                                    <div class="control-group">
                                            <label class="control-label" for="Title"><b>Book Number</b></label>
                                            <div class="controls">
                                                <input type="text" id="book_num" name="book_num" placeholder="Book number" class="span8"
                                                    required>
                                            </div>
                                    </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Title"><b>Book Title</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Title" class="span8"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Author"><b>Author</b></label>
                                            <select class="form-control" name="book_author">
                                                <option>-Select author-</option>
                                                <?php
                                                $query = "select author_name from author";
                                                $query_run = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                                    ?>
                                                    <option>
                                                        <?php echo $row['author_name']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Publisher"><b>Category</b></label>
                                            <select class="form-control" name="category">
                                            <option>-Select category-</option>
                                            <?php
                                            $query = "select cat_name from category";
                                            $query_run = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                ?>
                                                <option>
                                                    <?php echo $row['cat_name']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Year"><b>Price</b></label>
                                            <div class="controls">
                                                <input type="text" id="price" name="price" placeholder="Price" class="span8"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Availability"><b>Number of Copies</b></label>
                                            <div class="controls">
                                                <input type="text" id="availability" name="availability"
                                                    placeholder="Number of Copies" class="span8" required>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn btn-primary">Add Book</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div><!--/.content-->
                    </div>

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
if (isset ($_POST['submit'])) {
  $query = "insert into book values('$_POST[book_num]','$_POST[title]','$_POST[book_author]','$_POST[category]','$_POST[price]','$_POST[availability]')";
  $query_run = mysqli_query($conn, $query);
  echo "<script type='text/javascript'>alert('Book added')</script>";
}
?>

    </body>

    </html>

<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>