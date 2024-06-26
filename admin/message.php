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
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="reg_cat.php"><i class="menu-icon icon-edit"></i>Categories </a></li>
                                <li><a href="reg_author.php"><i class="menu-icon icon-edit"></i>Authors </a></li>
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
                                    <h3>Send a message</h3>
                                </div>
                                <div class="module-body">

                                    <br>

                                    <form class="form-horizontal row-fluid" action="message.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Rollno"><b>Receiver User ID:</b></label>
                                            <div class="controls">
                                                <input type="text" id="user_id" name="user_id" placeholder="User ID"
                                                    class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Message"><b>Message:</b></label>
                                            <div class="controls">
                                                <input type="text" id="Message" name="Message" placeholder="Enter Message"
                                                    class="span8" required>
                                            </div>
                                            <hr>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <button type="submit" name="submit" class="btn">Add Message</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>



                        </div><!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2024 ByteBooksLibrary Management System </b>All rights reserved.
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
        if (isset($_POST['submit'])) {
            $id = $_POST['user_id'];
            $message = $_POST['Message'];

            $sql1 = "insert into message (user_id,Msg,Date) values ('$id','$message',curdate())";

            if ($conn->query($sql1) === TRUE) {
                echo "<script type='text/javascript'>alert('Success')</script>";
            } else {//echo $conn->error;
                echo "<script type='text/javascript'>alert('Error')</script>";
            }

        }

        $sql2 = "SELECT users.id, users.full_name, users.email, users.phone,book.book_num, book.book_name, record.date_of_return 
        FROM record
        JOIN users ON record.user_id = users.id 
        JOIN book ON book.book_num = books.id 
        WHERE record.due_date < curdate() AND record.date_of_return = '0000-00-00'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    $title = $row['book_name'];
    $id = $row['user_id'];
    $message = "You have an overdue for the book ";

            $sql1 = "insert into message (user_id,Msg,Date) values ('$id','$message',curdate())";
    echo "<script type='text/javascript'>alert('Success')</script>";
} 
}else {//echo $conn->error;
    echo "<script type='text/javascript'>alert('Error')</script>";
}




        ?>
    </body>

    </html>


<?php } else {
    header("location:admin_login.php");
} ?>