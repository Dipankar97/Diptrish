<?php 
include('server.php');
include('ao.inc');
if(isset($_GET['unblockid'])){
    $id=$_GET['unblockid'];
    
    $sql=mysqli_query($db,"UPDATE users set is_Block='N' WHERE id= $id");
    $sql=mysqli_query($db,"UPDATE users set is_Active='Y' WHERE id= $id");
    header('location: admin.php');
    
}

?>
