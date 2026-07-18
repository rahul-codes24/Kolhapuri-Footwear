<!-- Admin backend Page for insert new product data into addproduct database-->
<?php
include("connection.php");
$name=$_POST["name"];
$price=$_POST["price"];
$categeory=$_POST["categeory"];
$description=$_POST["description"];
$stock=$_POST["stock"];

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
            echo"fail;";
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
            echo"fail;";
        }
    }
    else{
        echo"fail;";
    }
    if(!empty($_FILES['img3']))
    {
        $path3="uploads/";
        $path3=$path3.basename($_FILES['img3']['name']);
        if(move_uploaded_file($_FILES['img3']['tmp_name'],$path3))
        {
            echo "sucess3";
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
    }

    $a="select max(pro_id) from addproduct";
    if($res=mysqli_query($con,$a)){

    
    if($row=mysqli_fetch_array($res))
    {
        $pro_id=$row[0];
        $pro_id=$pro_id+1;
    }
}

   
}
$a="insert into review values($pro_id,'5','admin@123')";
if(mysqli_query($con,$a)){
    
}

$q="insert into addproduct values($pro_id,'$name',$price,'$path1','$path2','$path3','$path4','$description','$categeory',$stock)";
if(mysqli_query($con,$q)){
    header("Location:addproduct.php ?mode=success");
}
