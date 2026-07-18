<?php
include("connection.php");
$userid=$_POST["userid"];
$pass=$_POST["password"];

if(isset($_POST["btnsave"]))
{
    $q="select * from login where mail='$userid'";
    if($res=mysqli_query($con,$q))
    {
        if($row=mysqli_fetch_array($res))
        {
            if($row[3]==$pass)
            {   
                session_start();
                $_SESSION['uname']=$userid;
                
                header("Location:userhome.php");
            }
            else{
              
                Header("Location:login.php? status=fail");
            }
        }
        else{
            $a="select * from adminlogin where email='$userid'";
            if($res=mysqli_query($con,$a))
            {
                
                if($row=mysqli_fetch_array($res))
                {
                    if($row[1]==$pass)
                    {
                        session_start();
                    $_SESSION['uname']=$userid;
                    header("Location:addproduct.php");
                    }
                    else{
                        Header("Location:login.php? status=fail");
                    }
                }
                else{
                    Header("Location:login.php? status=fail");
                }

            }



        }
    }
    else
    {
        Header("Location:login.php? status=fail");
    }
}