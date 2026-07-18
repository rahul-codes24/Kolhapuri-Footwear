<!-- This Is Client Site for view the products from addproduct table-->

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
    <link rel="stylesheet" href="style.css">
    <style>
        .quantity{
            width:40px;
            border:none;
            text-align:center;
            border:1px solid black;
            font-size:1rem;

         
         }   
        
        </style>

</head>

<body>

    <header>
        <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">
            <a href="userhome.php">Products</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="containts ">
        
      
        
        
        <div class="procon-buy">
        <?php
        include("connection.php");
         $q="select * from addproduct";
         $result=mysqli_query($con,$q);
         while($row=mysqli_fetch_array($result)){

         
         ?>
            <div class="pro-buy1">
            <form name="frm3" action="addcartdb.php" method="POST">
                <div class="buy-img">
                   <input type="hidden" name="pro_id" value="<?php echo $row[0]?>">
                    <img src="<?php  echo $row['image']?>"  alt="Kolhapuri">
                    <input type="hidden" name="img1" value="<?php echo $row[3]?>">
                    
                </div>
                <div class="buy-text">
                    <p><?php echo $row['pro_name']?> </p>
                    <input type="hidden" name="name" value="<?php echo $row[1]?>">
                    <b>Price:</b><h2>₹<?php echo $row['price']?> </h2> (Inclusive of all taxes)
                    <input type="hidden" name="price" value="<?php echo $row[2]?>">
                    <h4>Quantity:<input type="number" name="quantity" min="1" max="5"  value="1" class="quantity"></h4>
                    <a href="addcart.html"><h3><button name="shopbtn">Shop Now</button></h3></a>
                </div>
         </form>
            </div>
            <?php } ?>
            
          
        </div>
       
       
        
        <hr>

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