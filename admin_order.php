


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
    <link rel="stylesheet" href="style.css?v=10">
    

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
    <div class="containts " style="background-color:#f1efef">
        
    <div class="body-box" >

           
                
        
         
            <h3>ORDERS</h3>
            <div class="table">
                <div class="row1" style="font-weight:bold">
                    <div class="order" >ORDER ID</div>
                    <div class="order">MOBILE</div>
                    <div class="order">DATE</div>
                    <div class="order" >TOTAL</div>
                    <div class="order" >status</div>
                    <div class="order" ></div>
                    
             </div>

        </div>
        
            
            <?php
           include("connection.php");
           $q="select * from orders ";
           if($res=mysqli_query($con,$q)){

            while($row=mysqli_fetch_array($res))
            {
                ?>
           
           <div class="table">
                <div class="row1">
                    <div class="order" ><?php echo $row[6]?></div>
                    <div class="order" ><?php echo $row[2]?></div>
                    <div class="order" ><?php echo $row[5]?></div>
                    <div class="order"><?php echo $row[4]?></div>
                   
                    <?php 
                    $a="select * from orderstatus where orderid=$row[6]";
                    if($res2=mysqli_query($con,$a)){
                        if($row2=mysqli_fetch_array($res2)){

                            if($row2[1]=="Accept"){
                                echo"<div class='order' style='font-size:1.7rem;color:green'><i class='fa-solid fa-check'></i></div></a>";
                            }
                            
                               
                            
                        }
                        else{
                        echo"<div class='order'style='color:red;font-size:1.7rem'><i class='fa-solid fa-clock'></i></div></a>";
                        }
                    }
                    ?>
                     <?php echo"<div class='order'><a href='cust_info.php?odrid=$row[6]' ><input type='button'  value='Check'></div></a>"?>
                   
            
                </div>
            </div>
                <?php
                   }
                }
               
             ?> 
           
                
        



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




