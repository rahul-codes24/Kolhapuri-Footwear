<?php

include("connection.php");
$pro_id=$_REQUEST["pro_id"];

$q="delete from addproduct where pro_id=$pro_id";
if(mysqli_query($con,$q))
{
    header("Location:admin_pro.php?mode=suc");
}
else{
    header("Location:admin_pro.php?mode=fail");
}