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
        <link rel="stylesheet" href="style.css?v=19">

    </head>

    <body>

        <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">

                <a href="userhome.php">Products</a>
                <a href="addcart.php">Cart</a>
                <a href="displayorder.php">Orders</a>
                <a href="logout.php">logout</a>
            </div>
        </div>

        <div class="page">
           
           
            
           
            

            <div class="page-wrap">

                <?php
                include("connection.php");
                session_start();
                if(!isset($_SESSION["uname"])){
                    header("Location:index.html");
                }
                $orderid=$_REQUEST["orderid"];
                $q="select *from orders where orderid=$orderid";
                if($res= mysqli_query($con,$q)){
                if($row=mysqli_fetch_array($res)){

                ?>
                <div class="page_list">
                    <div class="menu-h">
                        <div class="menu1">Order Placed</div>
                        <div class="menu1">Total</div>
                        <div class="menu1">Ship To</div>
                        <div class="menu1">Order Id</div>
                        <!-- <div class="menu1">Size</div> -->
                    </div>
                    <div class="menu-v">
                        <div class="menu2"><?php echo $row[5]?></div>
                        <div class="menu2"><?php echo $row[4]."₹"?></div>
                        <div class="menu2"><?php echo $row[3]?></div>
                        <div class="menu2"><?php echo $row[6]?></div>

                    </div>

                </div>

                <div class="list_pro">
                    <div class="cont_wrap">
                        <?php
                        }
                        }

                        $a="select * from orderedproduct where orderid=$orderid";
                        if($res=mysqli_query($con,$a)){
                        while($row=mysqli_fetch_array($res)){
                        ?>

                        <div class="list_contents">
                            <div class="cont_img">
                                <img src="<?php echo $row[7]?>">
                            </div>
                            <div class="cont_block">
                                <div class="listName"> <?php echo
                                    $row[2]?></div>
                                <div class="listprice"><?php
                                    echo"Price:". $row[4]."₹"?></div>
                            
                            <div class="listprice"><?php
                                    echo"Quantity:". $row[3]?></div>
                            
                           
                            <div class="listprice"><?php
                                    echo"Size:". $row[8]?></div>
                            </div>
                        </div>

                        <?php
                        }
                        }
                        ?>
                    </div>
                    <div class="cont_track">
                        <?php
                       
                        $b="SELECT * FROM orders where orderid=$orderid";
                        if($res= mysqli_query($con,$b)){
                        if($row=mysqli_fetch_array($res)){

                        ?>
                        <div class="del_date">
                            <h3>Estimated Delivery</h3>
                            <h3><?php echo $row[7]?> </h3>
                            <div class="trackermenu">
                                <div class="righttrack">
                                    <div class="rht1"><?php echo date("Y-m-d",strtotime($row[5]))?></div>
                                    <div class="rht1"><?php echo date("Y-m-d",strtotime($row[5]))?></div>
                                    <div class="rht1"></div>
                                    <div class="rht1"></div>
                                </div>
                                <div class="midtrack">
                                    <div class="rht3"><i
                                            class="fa-solid fa-circle-check"></i></div>
<?php
    $q="select * from orderStatus where orderid=$orderid";
    if($res=mysqli_query($con,$q)){
        if($val=mysqli_fetch_array($res)){
            if(isset($row)){
          echo"  <div class='rht3'><i
            class='fa-solid fa-circle-check'></i></div>";
            }
        }
        else{
            echo"  <div class='rht2'><i
            class='fa-solid fa-circle-check'></i></div>";
        }
    }
   

?>
                                    <!-- <div class="rht3"><i
                                            class="fa-solid fa-circle-check"></i></div> -->

                                    <div class="rht2"><i
                                            class="fa-solid fa-circle-check"></i></div>
                                    <div class="rht2"><i
                                            class="fa-solid fa-circle-check"></i></div>

                                </div>
                                <div class="lefttrack">
                                    <div class="rht1">Order Placed</div>
                                    <div class="rht1">Order Confirmed</div>
                                    <div class="rht1">Shipped</div>
                                    <div class="rht1">Order Delivered</div>
                                </div>
                               

                            </div>
                           <div class="invoice"> <?php echo"<a href='invoicepdf.php?orderid=$orderid' style='color:white'>Download Invoice </a>"?></div>
                        </div>
                        <?php
                        }
                        }
                        ?>

                    </div>

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

    </body>

</html>