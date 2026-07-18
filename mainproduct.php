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
    <link rel="stylesheet" href="style.css?v=3">
    <style>
        .quantity{
            width:40px;
            border:none;
            text-align:center;
            border:1px solid black;
            font-size:1rem;

         
         }  
        
 #catbtn{
    width:100px;
    background-color:white;
    color:black;
    border-radius:20px;
    height:40px;
    cursor: pointer;
}
#catbtnactive{
    width:100px;
    background-color:black;
    color:white;
    border-radius:20px;
    height:40px;
    cursor: pointer;
    
}
#bestseller{
    
    color:white;
   
   z-index: 1;
   position:absolute;
   height:140px;
   width:140px;
  
   border:none;


}
        
        </style>

</head>

<body>

    <header>
    <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">
                <a href="index.html">Home</a>
                <a href="mainproduct.php">Products</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <select name="Login" onchange="location = this.value;">
                    <option >Account</option>
                    <option value="login.php">Login</option>
                    <option value="register.php">Register</option>
                </select>
            </div>
        </div>
    </header>
    <div class="containts ">
        
    <div class="categeory">
            Select Categeory<br><br>
            <a href="mainproductMale.php" ><button id="catbtn">MALE</button></a>
            <a href="mainproductFemale.php"><button id="catbtn">FEMALE</button></a>
            <a href="mainproduct.php"><button id="catbtnactive">ALL</button></a>
            
            </div>
        
        
        <div class="procon-buy">
        <?php
        include("connection.php");
         $q="select * from addproduct";
         $result=mysqli_query($con,$q);
         while($row=mysqli_fetch_array($result)){

         
         ?>
            <div class="pro-buy1">
            <form name="frm3" action="login.html">
                <div class="buy-img">
                   
                <?php echo" <a href='mainproductView.php? id=$row[0] '>"?>
                <?php if($row['pro_id']==2)
                  {
                    echo"<span> <img src='about/seller.png'  id='bestseller'></span>";
                  }?>
                <img src="<?php  echo $row[3]?>"  alt="Kolhapuri"></a>
                    
                </div>
                <div class="buy-text">
                    <p><?php echo $row[1]?> </p>
                   
                    <b>Price:</b><h2>₹<?php echo $row[2]?> </h2> (Inclusive of all taxes)
                    
                    <!-- <h4>Quantity:<input type="number" name="quantity" min="1" max="5"  value="1" class="quantity"></h4> -->
                    <a href="login.html"><h3><button name="shopbtn">Shop Now</button></h3></a>
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