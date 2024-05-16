<?php
require "function.php";
include "../db.php";
$query= "delete from users where users.id = $_GET[id]";
$query_run = mysqli_query($conn,$query);
if($query_run){
?>
    <script type="text/javascript">
    alert ("User removed.");
    window.location.href = "student.php"
</script>
<?php   
}
?>