<?php
include("connection.php");

$id=$_REQUEST["id"];
echo $id;
$q="insert into orderStatus values ($id,'Accept')";
if(mysqli_query($con,$q)){
    echo "success";
}

$a="select * from orderedproduct where orderid=$id";
if($res2=mysqli_query($con,$a)){
    while($row2=mysqli_fetch_array($res2)){
        $quantity=$row2[3];
        
        $b="select * from addproduct where pro_id=$row2[0]";

        if($res1= mysqli_query($con,$b)){
    
             if($row1=mysqli_fetch_array($res1)){
                 $stock=$row1[9];
                 echo $stock."stock";
                  
        $stock=$stock-$quantity;
        echo $stock;
        $d="select * from addproduct where pro_id=$row2[0]";
        if($res4=mysqli_query($con,$d)){
            if($row4=mysqli_fetch_array($res4)){
                $totalsell=$row4[10]+$quantity;
            }
        }
        $c="UPDATE addproduct SET stock=$stock,totalsell=$totalsell WHERE pro_id=$row2[0]";
       if( mysqli_query($con,$c)){
        Header("Location:admin_order.php");
       }
             
             }
             
            
        }
        
      
    }
    
  
}
else{
    echo "false3";
}

