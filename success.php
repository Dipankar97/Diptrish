<?php 
include('server.php');
include('ao.inc');
if(isset($_GET['successid'])){
    $id=$_GET['successid'];
   
    $sql=mysqli_query($db,"UPDATE users set is_Active='Y' WHERE id= $id");
    header('location: admin.php');
    
}

?>
