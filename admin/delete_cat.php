<?php
require "function.php";
include "../db.php";
$query= "delete from category where cat_id = $_GET[catid]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("Category deleted.");
    window.location.href = "reg_cat.php"
</script>
<?php   
}
?>