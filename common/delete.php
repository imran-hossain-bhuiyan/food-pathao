<?php
$id=$_GET['id'];
include 'dbconnect.php';
$sql="DELETE FROM `our-item` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: admin.php");

}
?>