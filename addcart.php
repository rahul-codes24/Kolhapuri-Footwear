<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kolhapuri</title>
        <link rel="icon" href="about/design1.jpg" type="image/icon type">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css?v=15">
        </head>

    <body>

    <header>
        <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">
                
                <a href="userhome.php">Products</a>
                <a href="addcart.php">Cart</a>
                <a href="displayorder.php">Orders</a>
                <!-- <a href="contact.php">Contact</a> -->
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
        <div class="containts2"style="margin-top:10px">

            <h1>Checkout</h1>

            <div class="cart-box">
            <div class="cart-wrap">
                <div class="cart-menu">
                    <div class="cart-list" style="margin-left:50px">
                        <div class="menu-img">
                            <b>image</b>

                        </div>
                        <div class="menu-name" style="width:300px">

                        </div>
                        <div class="menu-price" style="width:100px">
                            Quantity
                        </div>
                        <div class="menu-price" style="width:40px">
                            Size
                        </div>
                        <div class="menu-price" style="margin-left:20px">
                            Total
                        </div>
                        <div class="delete">

                        </div>

                    </div>

                    <?php

                    include("connection.php");
                    session_start();
                    if(!isset($_SESSION["uname"])){
                        header("Location:index.html");
                    }
                    $total=0;
                    $userid=$_SESSION["uname"];
                    $q="select c.userid,c.pro_id,c.price,c.pro_name,c.quantity,c.total,c.size,a.image from cartlist c inner join addproduct a on c.pro_id=a.pro_id where c.userid='$userid'";
                        
                    $res=mysqli_query($con,$q);
                    // if(mysqli_num_rows($res)>0){
                    //     echo "hiii";
                    // }

                    while($row=mysqli_fetch_assoc($res))
                    {
                      
                   
                    
                       
                    ?>
                    <div class="cart-list"  style="margin-top:20px">
                        <div class="menu-img">
                           <a href="productView.php?id=<?php echo$row['pro_id'];?>"> <img src="<?php echo $row['image']?>"></a>

                        </div>
                        <div class="menu-name"  style="width:300px"
                            style="text-align:center">
                            <?php echo $row['pro_name']?>
                        </div>
                        <div class="menu-price" style="width:80px"
                            style="text-align:center">
                            <?php echo $row['quantity']?>
                        </div>
                        <div class="menu-price" style="width:40px"
                            style="text-align:center">
                            <?php echo $row['size']?>
                        </div>
                        <div class="menu-price">
                            <?php echo $row['total'] ;
                            $total+=$row['total'];
                            ?> ₹
                        </div>
                        
                        <div class="delete">
                            <?php
                            $pro_id=$row['pro_id'];
                            echo "<a href='deletecart.php?pro_id=$pro_id'
                                style='color:black'><i
                                    class='fa-solid fa-circle-xmark'></i></a>";
                            ?>
                        </div>

                    </div>
                    <?php
                    }
                   if($total==0)
                   {
                    echo"<div class='emptycart'>
                    <i class='fa-solid fa-cart-plus'></i>
                    
                    <h6>Cart Is Empty</h6>                    
                    </div>";


                   }
                   
                    
                
                
                    ?>
                   

                </div>
                <div class="totalbox"
                        style="border:1px solid black;background-color:white">
                        <div class="total" style="margin-right:150px;">
                            Total
                        </div>
                        
                        <div class="totalval" ><?php
                            echo $total.' ₹';
                            ?>
                        </div>
                       

                    </div>
                    <div class="buymore">
                       <a href="userhome.php"> <span>BUY MORE</span></a>
                    </div>
                </div>


                <div class="cart-detail">
                    <form action="order.php" method="POST">
                        <div class="user-info">
                            <h2>YOUR INFORMATION</h2>

                            EMAIL
                            <input type="text"
                                placeholder="Shubhampatil@gmail.com"
                                value="<?php echo $userid ?>"
                                style="font-size:1rem; padding-left:10px;">
                            ADDRESS:
                            <input type="text" name="address" id="address"
                                placeholder="Building No., Lane, Taluka, Dist"
                                required="required">
                            <input type="hidden" name="total" 
                                value="<?php echo $total ?>">

                        </div>
                        <div class="payment">
                            <h2>PAYMENT OPTIONS</h2>
                            <!-- COD <input type="radio" name="paymentmode" id="paymentmode">
                            ONLINE <input type="radio" name="paymentmode" id="paymentmode"> -->
                           
                            <div class="brands">
                               PAYMENT MODE-CASH ON DELIVERY
                            </div>
                            <div class="spiner" id="spiner"> </div>
                            <marquee behavior="" direction="">currently We are not supporting online payment</marquee>
                            <button name="btnsave" id="btnsave" onclick=checkbtn()>BUY NOW</button>
                            <div class="msg" id="msg" style="text-align:center;color:green"> </div>
                        

                        </div>
                    </form>
                </div>

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
                      <script>
                            btnsave=document.getElementById("btnsave");
                            cartmsg=document.getElementById("menu-name");
                            spiner=document.getElementById("spiner");
                            spiner.style.display="none";
                            total=<?php echo $total?> 
                            if(total==0){
                                
                                btnsave.style.display="none";
                            cartmsg.innerHTML="Cart Is Empty";

                            }

                function checkbtn(){
                 showmsg=document.getElementById("msg");
                checkadrs=document.getElementById("address").value;
                if(checkadrs!=""){
                    
               btnsave.style.display="none";
               spiner.style.display="block";
               showmsg.innerHTML="Just Wait For Second";
                }
             
                

            }
                        </script>

    </body>

</html>