<?php
require "function.php";
include "../db.php";
$query= "delete from book where book_number = $_GET[bn]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("Book deleted.");
    window.location.href = "manage_books.php"
</script>
<?php   
}
?>