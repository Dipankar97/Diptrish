<?php 
include('server.php');
include('ao.inc');
if(isset($_GET['blockid'])){
    $id=$_GET['blockid'];
    
    $sql=mysqli_query($db,"UPDATE users set is_Block='Y' WHERE id= $id");
    $sql=mysqli_query($db,"UPDATE users set is_Active='N' WHERE id= $id");
    header('location: admin.php');
    
}

?>
