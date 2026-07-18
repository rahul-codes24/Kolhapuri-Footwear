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
        <link rel="stylesheet" href="style.css?v=10">

    </head>

    <body>

        <head>
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
        </head>
        <div class="containts3" >

            <h1>Orders</h1>

            <div class="cart-box" style="min-height:55.2vh">
            <div class="cart-wrap2">
                <div class="cart-menu2">
                    <div class="cart-list" style="margin-left:30px">
                    <div class="menu-price" style="width:70px">
                            orderId
                        </div>
                        <div class="menu-img">  
                       </div>
                        <div class="menu-name" style="width:300px">
                            <b>Name</b>
                        </div>
                        <div class="menu-price" style="width:100px">
                            Mobile
                        </div>
                        <div class="menu-price" style="width:90px">
                            total
                        </div>
                        
                        <div class="menu-price" style="margin-left:30px">
                            
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
                    $userid=$_SESSION["uname"];
                    $total='0';
                    // $userid=$_SESSION["uname"];
                    // $q="select c.userid,c.pro_id,c.price,c.pro_name,c.quantity,c.total,a.image from cartlist c inner join addproduct a on c.pro_id=a.pro_id where c.userid='$userid'";
                    $q="select * from orders where email='$userid'";
                    $res=mysqli_query($con,$q);

                    while($row=mysqli_fetch_assoc($res))
                    {
                    ?>

                   
                    <div class="cart-list" style="margin-top:20px">
                        <div class="menu-img">
                            

                        </div>
                        <div class="menu-price"style="width:90px">
                            <?php echo $row['orderid'] ;
                           $odrid=$row['orderid'] 
                            ?> 
                        </div>
                        <div class="menu-name" style="width:300px"
                            style="text-align:center">
                            <?php echo $row['name']?>
                        </div>
                        <div class="menu-price" style="width:100px"
                            style="text-align:center">
                            <?php echo $row['mobile']?>
                        </div>
                        <div class="menu-price" style="width:80px"
                            style="text-align:center">
                            <?php echo $row['total']?>₹
                        </div>
                      
                        <div class="menu-price">
                            <?php echo "<a href='orderlist.php?orderid=$odrid'><button>DETAILS</button></a>";
                           
                            ?> 
                        </div>
                        <!-- <div class="delete">
                            <?php
                            $pro_id=$row['pro_id'];
                            echo "<a href='deletecart.php?pro_id=$pro_id'
                                style='color:black'><i
                                    class='fa-solid fa-circle-xmark'></i></a>";
                            ?>
                        </div> -->

                    </div>
                    <?php
                    }
                    ?>
                   

                </div>
                <!-- <div class="totalbox"
                        style="background-color:green;color:white;">
                        <div class="total" style="margin-right:150px;">
                            Total
                        </div>
                        <div class="totalval"><?php
                            echo $total.' ₹';
                            ?>
                        </div>

                    </div>

                </div> -->


                <!-- <div class="cart-detail">
                    <form action="order.php" method="POST">
                        <div class="user-info">
                            <h2>YOUR INFORMATION</h2>

                            EMAIL
                            <input type="text"
                                placeholder="Shubhampatil@gmail.com"
                                value="<?php echo $userid ?>"
                                style="font-size:1rem; padding-left:10px;">
                            ADDRESS:
                            <input type="text" name="address"
                                placeholder="Building No., Lane, Taluka, Dist"
                                required="required">
                            <input type="hidden" name="total"
                                value="<?php echo $total ?>">

                        </div>
                        <div class="payment">
                            <h2>PAYMENT OPTIONS</h2>
                            <div class="brands">
                                <i class="fa-brands fa-google-pay"></i>
                                <i class="fa-brands fa-cc-paypal"></i>
                                <i class="fa-brands fa-cc-amazon-pay"></i>
                                <i class="fa-brands fa-cc-apple-pay"></i>
                            </div>
                            <button name="btnsave">BUY NOW</button>

                        </div>
                    </form>
                </div> -->

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