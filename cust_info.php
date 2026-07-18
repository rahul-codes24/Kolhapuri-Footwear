


<!-- This Is Client Site for view the products from addproduct database-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolhapuri</title>
    <link rel="icon" href="about/design1.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?v=9">
    <script>
        function reject(){
            var rej=document.getElementById("rejected");
            rej.style.display="block";
            
        }
        
     function closebtn()
     {
        btnsave=document.getElementById("btnsave");
            btnsave.style.display="none";
            spiner.style.display="block";
            showmsg.innerHTML="Just Wait For Process";
     }
    </script>

</head>

<body>
<header>
        
        <div class="navbar">
            <div class="nav-logo">
            </div>
           
            <div class="nav-menu">
                <a href="addproduct.php" >Addproduct</a>
                <a href="admin_pro.php" >View Products</a>
                <!-- <a href="adminenquiry.php">Enquiries</a> -->
                <a href="admin_order.php" id="active">Orders</a>
                <a href="reports.php">Reports</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="containts "style="min-height:67vh" >
        
    <div class="body-box"  >

           
                
        
         
            
          
      
            

            <?php
           include("connection.php");
           $id=$_REQUEST["odrid"];
          
           $q="select * from orders where orderid=$id";
           if($res=mysqli_query($con,$q)){

            while($row=mysqli_fetch_array($res))
            {

                
                ?>
           
           
                
               
           
             <div class="odr_box" style="padding-left:40%">
             <div class="odr_containt">
              <b> ORDER ID:</b> <?php echo $row[6] ?>
               </div>
                <div class="odr_containt">
                   <b> ORDER DATE: </b><?php echo $row[5]?>
        
                </div>
                
                <div class="odr_containt">
                   <b> ORDER PRICE:</b> <?php echo $row[4] ?>
        
                </div>
                <div class="odr_containt">
                  <b>  ADDRESS:</b> <?php echo $row[3] ?>
        
                </div>
                <div class="odr_containt">
                   <b> MOBILE NO: </b><?php echo $row[2] ?>
        
                </div>
                <div class="odr_containt">

                 <b>   EMAIL:</b><?php $usernm=$row[1]; echo $usernm ?>
        
                </div>
                
                    <!-- 
                            ?>
                            <div class="odr_containt">
                            <b> ORDERED ITEMS:</b> <?php echo $row[2]."-₹".$row[4] ?>
                            </div>
                         -->
        
               

             </div>
           
                
             <?php
                   }
                }
                ?> 


        </div>

        <div class="table">
                <div class="row1" style="font-weight:bold;border-bottom:1px solid black">
               
                    <div class="order" >PRODUCT ID</div>
                    <div class="order">PRODUCT NAME</div>
                    <div class="order">PRICE</div>
                    <div class="order" >QUANTITY</div>
                    
                    
                    
        </div>
            </div>
            <div class="table">
        <?php 
                    $a="select * from orderedproduct where orderid= $id";
                    if($res=mysqli_query($con,$a)){
                        while($row=mysqli_fetch_array($res))
                        {
                          
                            ?>

        
                <div class="row1" style="border-bottom:1px solid black">
                    <div class="order" ><?php echo $row[0]?></div>
                    <div class="order" ><?php echo $row[2]?></div>
                    <div class="order" ><?php echo $row[5]?></div>
                    <div class="order"><?php echo $row[3]?></div>

                    
                    
                   
        </div>
      
                       
                        
    <?php
    }
}
?>
 </div>

 <?php 
                    $flag=0;
                    $x="select * from orderStatus where orderid=$id";
                    if($res=mysqli_query($con,$x)){
                        if($val=mysqli_fetch_array($res)){

                            if (isset($val[0])){
                               
                                echo "<div class='row1' style='color:red;text-align:center;padding-top:30px;padding-left:70px;'><div class='order'>Accepted</div>
                                </div>";
                               
                               
                            }
                        //     else{
                        //         echo"<div class='order'><a href='order_status.php? id=$id' ><input type='button'  value='ACCEPT'></div></a>";                 
                        
                        // }
                      
                        
                    }
                    else{
                        echo "<div class='row1'>";
                        echo"<div class='order'><a href='order_status.php? id=$id' ><input type='button'  value='ACCEPT'></div></a>";  
                        echo"<div class='order'><input type='button'  value='REJECT' onclick='reject()'></div>"; 
                        echo "</div>" ;
                    }
                }
             
                    ?>
                       <div class="table" style="text-align:center;line-height:50px;display:none"id="rejected">
                <form action="reject.php" method="POST" >
                   <br> Enter The Cancelation Reason:<br>
                    <input type="text" name="reason" id="" style="width:400px;height:40px;"><br>
                    <input type="hidden" name="orderid" value="<?php echo $id?>">
                    <input type="hidden" name="userid" value="<?php echo $usernm?>">
                    <div class="spiner" id="spiner" style="display:none" ></div>
                    <input type="submit" value="SUBMIT" name="btnsave" onclick=' closebtn()'style="width:200px;height:40px;background-color:yellow;border:none;border-radius:20px;">
                </form>
            </div>

                 </div>
    <footer>
        <div class="foot-panel">
            <div class="foot-img"></div>
        </div>
        <div class="copyright">
            ©2023,kolhapuri All right reserved
        </div>
    </footer>

</body>

</html>




