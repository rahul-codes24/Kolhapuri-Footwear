<?php
include("connection.php");
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$mail=$_POST["mail"];
$set_pass=$_POST["set_pass"];





if(isset($_POST["btnregister"]))
{
   

    $q="insert into login values('$name','$mobile','$mail','$set_pass')";

        if(mysqli_query($con,$q))
        {
         header("Location:login.php");

        }
        else{
         header("Location:register.php");
        }
    }
    else{
        echo"fail";
    }