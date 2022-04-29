<?php 
include('server.php');
include('ao.inc');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    //$sql="delete from `users` where id=$id";
    $sql=mysqli_query($db,"UPDATE users set is_Active='N' WHERE id= $id");
    header('location: admin.php');
    // $result=mysqli_query($db,$sql);
    // if($result){
    //     header('location: admin.php');
    // }
}

?>
