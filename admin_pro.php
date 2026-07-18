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
    <link rel="stylesheet" href="style.css?v=3">
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
<?php

if(isset($_REQUEST["mode"]))
{
    if($_REQUEST["mode"]=="updsuc")
    {
        echo"<script>alert('Updated Successfully')</script>";
    }
    else if($_REQUEST["mode"]=="updfail")
    {
        echo"<script>alert('Updation Failed')</script>";

    }
    else if($_REQUEST["mode"]=="suc")
    {
        echo"<script>alert('Deleted')</script>";
    }
    else{
        echo"<script>alert('Failed')</script>";

    }
}
?>

<header>
        <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">
                <a href="addproduct.php" >Addproduct</a>
                <a href="admin_pro.php" id="active">View Products</a>
                <!-- <a href="adminenquiry.php">Enquiries</a> -->
                <a href="admin_order.php">Orders</a>
                <a href="reports.php">Reports</a>
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
            
                <div class="buy-img">
                    
                <input type="hidden" name="img1" value="<?php echo $row[0]?>">
                <?php echo" <a href='productView.php? id=$row[pro_id] '>"?><img src="<?php  echo $row['image']?>"  alt="Kolhapuri"></a>
                    <input type="hidden" name="img1" value="<?php echo $row[3]?>">
                    
                </div>
                <div class="buy-text">
                    <p><?php echo $row['name']?> </p>
                    <input type="hidden" name="name" value="<?php echo $row[1]?>">
                    <b>Price:</b><h2>₹<?php echo $row['price']?> </h2> (Inclusive of all taxes)
                    <input type="hidden" name="price" value="<?php echo $row[2]?>">
                   <h3>
                    <?php echo"<a href='add_proedit.php? pro_id=$row[0]'><button name='editbtn'>Edit</button></a>"?>
                    <?php echo"<a href='deleteadmin_pro.php? pro_id=$row[0]'><button name='delbtn'>delete</button></a></h3>"?>
                </div>
         
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