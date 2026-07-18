<!--This the  server site for store every shop product detail in cart database-->

<?php 
session_start();
include("connection.php");
$userid=$_SESSION["uname"];
$pro_id=$_POST["pro_id"];
$image=$_POST["image"];
$size=$_POST["size"];
$name=$_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$categeory=$_POST["categeory"];
$review=$_POST["review"];
if($quantity==""){
    $quantity=1;
}


echo $_POST["review"];
if(($_POST["review"])>0){

$count=0;
$a="select * from review";
if($res=mysqli_query($con,$a)){
    while($row=mysqli_fetch_array($res)){
              if($pro_id==$row[0] && $userid==$row[2]){     

        $b="update review set reviewValue=$review WHERE pro_id=$pro_id AND email='$userid'";
        if(mysqli_query($con,$b)){
              $count=1;        
        echo"update";
        }
       

    }


}
if($count==0){
$a="insert into review values($pro_id,$review,'$userid')";
if(mysqli_query($con,$a)){
      echo "insert";
     
}
}
}


}


if(isset($_POST["shopbtn"]))
{
         $s="select * from cartlist where userid='$userid' AND pro_id=$pro_id AND size=$size";
         if($res=mysqli_query($con,$s))
         {
            $row=mysqli_fetch_array($res);
            
           
           
             if(!empty($row[0])){
                $quantity=$quantity+$row[4];
                $total=(int)$price* (int)$quantity;
                
                   $a="update cartlist set quantity=$quantity ,total=$total where pro_id=$pro_id";
                  
                    mysqli_query($con,$a);
                    echo $quantity;
                    header("Location:addcart.php");
                }
                else{
                    $total=$price * $quantity;
                $q="insert into cartlist values('$userid',$pro_id,$price,'$name',$quantity,$total,'$image',$size,'$categeory')";
                if(mysqli_query($con,$q))
                {
                     header("Location:addcart.php");
                    echo "success";
                    
                }
            

             }
         }
        

         }
       
       
?>

      
    



    
    
    
    