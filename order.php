<?php
session_start();
include("connection.php");
$userid=$_SESSION['uname'];
$address=$_POST['address'];
date_default_timezone_set("Asia/Kolkata"); 
$date = date('Y-m-d H:i:s');

// $total=$_POST['total'];

$alltotal=0;

if(isset($_POST['btnsave']))
{
$q="select max(orderid) from orderedproduct";
if($res=mysqli_query($con,$q)){
    if($row=mysqli_fetch_array($res)){
        $orderid=$row[0];
        $orderid=$orderid+1;
    }
}

$q="select c.userid,c.pro_id,c.pro_name,c.quantity,c.image,c.price,c.total,c.size,c.categeory, l.name,l.mobile from cartlist c inner join login l where c.userid='$userid' AND l.mail='$userid'";
if($res=mysqli_query($con,$q))
{
   
    while($row=mysqli_fetch_assoc($res))
    {
        // $userid=$row['userid'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $pro_id=$row['pro_id'];
        $pro_name=$row['pro_name'];
        $quantity=$row['quantity'];
        $image=$row['image'];
        $price=$row['price'];
        $total=$row['total'];
        $size=$row['size'];
        $categeory=$row['categeory'];
        $a="insert into orderedproduct values($pro_id,$orderid,'$pro_name',$quantity,'$price',$total,'$userid','$image','$size','$date','$categeory')";
        
     
        mysqli_query($con,$a);
         

        $alltotal+=$total;
       

       
        
    }
}
    $b="delete from cartlist where userid='$userid'";
   if( mysqli_query($con,$b)){
     header("Location:orderbill.php?userid=$userid & name=$name & mobile=$mobile & address=$address  & orderid=$orderid & alltotal=$alltotal ");
   }

}

?>