<?php
include("connection.php");
session_start();

$uname=$_POST["username"];
$mobile=$_POST["mobile"];
$msg=$_POST["message"];
$date= date('d-m-y h:i:s');
if(isset($_POST["btnsave"])){
    $q="insert into enquiry values('$uname','$mobile','$msg','$date')";
    if(mysqli_query($con,$q))
    {
        if(isset($_SESSION["uname"])){
            
        header("Location:contact.php?mode=success");
            
        }
        else{
            header("Location:contact.html");

        }
    }
    
}