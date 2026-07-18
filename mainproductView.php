
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
    <link rel="stylesheet" href="style.css?v=18">
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
                <a href="index.html">Home</a>
                <a href="product.php">Products</a>
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

     <?php
     include("connection.php");
     $id=$_REQUEST["id"];
     $q="select * from addproduct where pro_id=$id";
     if($res=mysqli_query($con,$q)){
        if($row=mysqli_fetch_array($res)){

     ?>
       <form action="login.php" method="POST">
       <div class="pro-detail"> 
      <div class="pro-img">
        <img id="bigSize" src="<?php echo $row[3]?>"/>
     
        <div class="pro-subimg">
        <div class="img1">
            <script>let img3="<?php echo $row[3]?>";</script>
            <img src="<?php echo $row[3]?>" onclick=img(img3)>
            </div>
            <div class="img1">
                <script>let img1="<?php echo $row[4]?>";</script>
            <img src="<?php echo $row[4]?>" onclick=img(img1)>
            </div>
            <div class="img1">
            <script>let img2="<?php echo $row[5]?>";</script>
            <img src="<?php echo $row[5]?>"  onclick=img(img2) />
            </div>
           
            <div class="img1">
            <script>let img4="<?php echo $row[6]?>";</script>
            <img src="<?php echo $row[6]?>" onclick=img(img4)>
            </div>
        </div>
        </div>
      <div class="pro-text">
        <div class="pro-heading">
        <?php echo $row[1]?>
        </div>
        <div class="buy-text">
        
         <b>Price:</b><h2>₹<?php echo $row['price']?><span>₹<?php echo ($row['price'])*2?></span> </h2> (Inclusive of all taxes)
        </div>
        <div class="pro-review">
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        </div>
        <div class="pro-size">
            <h4>Select Size</h4>
            <select name="size">
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <h4>Quantity:<input type="number" name="quantity" min="1" max="5" placeholder="1" class="quantity"></h4>
        <div class="pro-infotext" >
            <h3>Description:</h3>
          <p> <?php echo $row[7]?></p>
        </div>
             <input type="hidden" name="pro_id" value="<?php echo $row[0]?>">
            <input type="hidden" name="image" value="<?php echo $row[3]?>">
            <input type="hidden" name="name" value="<?php echo $row[1]?>">
            <input type="hidden" name="price" value="<?php echo $row[2]?>">
           
        <a href="login.php"><button  name="shopbtn">Buy Now</button></a>
        
      </div>
      </div>
        
        </form>
       
    
        <?php   }
     }
     ?>

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
        
        function img(images){
          document.getElementById("bigSize").src=images;
        }
        
    </script>

</body>

</html>