<?php
require "function.php";
include "../db.php";
$query= "delete from book where book_num = $_GET[id]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("Book deleted.");
    window.location.href = "book.php"
</script>
<?php   
}
?>