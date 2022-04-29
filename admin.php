<?php 
include("server.php");
include("ao.inc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Console</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5" onclick="window.location.href='logout.php';" style="float:right;">Logout</button>
    <h1>Users</h1>
    <button class="btn btn-primary my-5" onclick="window.location.href='addUser.php';">Add Users</button>
    <button class="btn btn-success my-5" onclick="window.location.href='addAdmin.php';">Add Admin</button>
    <!-- <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form> -->
    
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone/Mobile</th>
            <th>Diptrish ID</th>
            <th>Status</th>
            <th>Operation</th>
            <th>Modify</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "Select * from `users` order by `is_Active` AND `is_Block` desc";
        $result = mysqli_query($db,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $username=$row['username'];
                $phone=$row['phone'];
                $u_id=$row['u_id'];
                $is_Active=$row['is_Active'];
                $is_Block=$row['is_Block'];
                $email=$row['email'];
                $password=$row['password'];
                $password1=md5($password);
                
                $status = "";
                if($is_Active == "Y" && $is_Block == "N") {
                    $status = "Active";
                    echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$u_id.'</td>
                <td>'.$status.'</td>
                <td>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
                <td>
                <button class="btn btn-warning"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                </td>
                <td>
                <button class="btn btn-primary"><a href="block.php?blockid='.$id.'" class="text-light">Block</a></button>
                </td>
                </tr>';
                } 
                else if($is_Block == "Y"){
                    $status = "Blocked";
                    echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$u_id.'</td>
                <td>'.$status.'</td>
                <td>❎
                </td>
                <td>
                ❎
                </td>
                <td>
                <button class="btn btn-primary"><a href="unblock.php?unblockid='.$id.'" class="text-light">Un Block</a></button>
                </td>
                </tr>';
                }
                
                else if($is_Block == "N" && $is_Active="N"){
                    $status = "In Active";
                    echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$u_id.'</td>
                <td>'.$status.'</td>
                <td><button class="btn btn-success"><a href="success.php?successid='.$id.'" class="text-light">Reactive</a>
                </td>
                <td>
                <button class="btn btn-warning"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                </td>
                <td>
                <button class="btn btn-primary"><a href="block.php?blockid='.$id.'" class="text-light">Block</a></button>
                </td>
                </tr>';
                }
                
            }
        }
        ?>
        
        </tbody>
    </table>
    </div>

</body>
</html>