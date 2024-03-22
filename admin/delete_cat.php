<?php
require "function.php";
include "../db.php";
$query= "delete from category where cat_id = $_GET[cid]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("Category deleted.");
    window.location.href = "manage_cat.php"
</script>
<?php   
}
?>