<?php
include("connection.php");
$name=$_POST["name"];
$price=$_POST["price"];
$pro_id=$_POST["pro_id"];
$description=$_POST["description"];
$categeory=$_POST["categeory"];
$stock=$_POST["stock"];


if($categeory=='select')
{
	$categeory=$_POST["categeory2"];
}






if(isset($_POST["btnsubmit"]))
{
    if(!empty($_FILES['img1']))
    {
        $path1="uploads/";
        $path1=$path1.basename($_FILES['img1']['name']);
        if(move_uploaded_file($_FILES['img1']['tmp_name'],$path1))
        {
            echo"success;";
        }
        else{
            $path1=$_POST["img1"];
        }
    }
    if(!empty($_FILES['img2']))
    {
        $path2="uploads/";
        $path2=$path2.basename($_FILES['img2']['name']);
        if(move_uploaded_file($_FILES['img2']['tmp_name'],$path2))
        {
            echo"success2";
        }
        else{
            $path2=$_POST["img2"];
        }
    }
   
    if(!empty($_FILES['img3']))
    {
        $path3="uploads/";
        $path3=$path3.basename($_FILES['img3']['name']);
        if(move_uploaded_file($_FILES['img3']['tmp_name'],$path3))
        {
            echo "sucess3";
        }
		else{
			$path3=$_POST["img3"];
		}
    }
    if(!empty($_FILES['img4']))
    {
        $path4="uploads/";
        $path4=$path4.basename($_FILES['img4']['name']);
        if(move_uploaded_file($_FILES['img4']['tmp_name'],$path4))
        {
            echo"successful";
        }
		else{
			$path4=$_POST["img4"];
		}
    }

  

   
}
    $q="update addproduct set name='$name',price='$price',image='$path1',img2='$path2' ,img3='$path3',img4='$path4',description='$description',categeory='$categeory',stock=$stock   where pro_id='$pro_id'";
   if( mysqli_query($con,$q))
   {
    header("Location:admin_pro.php?mode=updsuc");
   }
   else{
   header("Location:admin_pro.php?mode=updfail");
   }
    

