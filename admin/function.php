 <?php
 session_start();
function is_admin_login(){
    if($_SESSION ['admin_id']){
        return true;
    }else{
        return false;
    }
} 
function get_user_count(){
    include '../db.php';
    $user_count ="";
    $sql = "SELECT count(*)  as user_count from users";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $user_count = $row['user_count'];
    }
    return($user_count);
}

function get_book_count(){
    include '../db.php';
    $book_count ="";
    $sql = "SELECT count(*)  as book_count from book";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $book_count = $row['book_count'];
    }
    return($book_count);
}

function get_category_count(){
    include '../db.php';
    $category_count ="";
    $sql = "SELECT count(*)  as category_count from category";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $category_count = $row['category_count'];
    }
    return($category_count);
}

function get_author_count(){
    include '../db.php';
    $author_count ="";
    $sql = "SELECT count(*)  as author_count from author";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $author_count = $row['author_count'];
    }
    return($author_count);
}

function get_issued_books_count(){
    include '../db.php';
    $issued_books_count ="";
    $sql = "SELECT count(*)  as issued_books_count from issued_books";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $issued_books_count = $row['issued_books_count'];
    }
    return($issued_books_count);
}