<?php
include 'connection.php';
if(isset($_GET['id'])){
    $user_id=$_GET['id'];
    $sql1=mysqli_query($conn, "delete from login where login_id='$user_id'");
    $sql2=mysqli_query($conn, "delete from register where login_id='$user_id'");
    if($sql1 && $sql2){
        echo "Record deleted successfully";
        echo "<script>window.location.href='admin.php';</script>";
    }else{
        echo "Can't Delete !!";
        header('location:admin.php');
    }
}