<?php
require "function.php";
include "../db.php";
$query= "delete from author where author_id = $_GET[id]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("Author deleted.");
    window.location.href = "reg_author.php"
</script>
<?php   
}
?>