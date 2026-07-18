<?php 
session_start();
include("connection.php");
$pro_id=$_REQUEST['pro_id'];
$userid=$_SESSION['uname'];
echo $pr_id.$userid;

$q="delete from cartlist where userid='$userid' AND pro_id=$pro_id";
if(mysqli_query($con,$q))
{
    header("Location:addcart.php");
}
?>