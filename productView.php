
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
    <link rel="stylesheet" href="style.css?v=19">
    <style>
        .quantity{
            width:40px;
            border:none;
            text-align:center;
            border:1px solid black;
            font-size:1rem;

         
        }
        </style>
    <script type="text/javascript">

       function review(val){
        
            for(let i=1;i<=val;i++){
            document.getElementById("r"+i).style.color='yellow';
          
            
            }
            document.getElementById("reviewIns").value=val;
            rev=document.getElementById("reviewIns").value;
            

        }
       
        </script>



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
    <div class="containts ">

     <?php
     include("connection.php");
     $id=$_REQUEST["id"];
     $q="select * from addproduct where pro_id=$id";
     if($res=mysqli_query($con,$q)){
        if($row=mysqli_fetch_array($res)){

     ?>
       <form action="addcartdb.php" method="POST">
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
        
         <b>Price:</b><h2 style="color:red">₹<?php echo $row['price']?><span>₹<?php echo ($row['price'])*2?></span> </h2> (Inclusive of all taxes)
        </div>
        <div class="pro-review2">
            <?php 
        }
    }       $count=0;
            $totalstar=0;
            $a="select * from review where pro_id=$id";
            if($res=mysqli_query($con,$a)){
                while($row=mysqli_fetch_array($res)){
                    $totalstar+=$row[1];
                    $count++;
                }
                             
            }
            $star=$totalstar/$count;
            for($i=1;$i<=$star;$i++){
          echo"<i class='fa-solid fa-star'style=' color:#FFA41C;'></i>";
             }
             if((round($star)-$star)>0){
                echo "<i class='fa-solid fa-star-half' style=' color:#FFA41C;'></i>";
             }
    echo number_format((float)$star,1,'.','') ."/5"; 
   
        ?>
        <div class="totalRating">
            Total Ratings:<?php echo $count?>


        </div>

<?php
     include("connection.php");
     session_start();
     if(!isset($_SESSION["uname"])){
         header("Location:index.html");
     }
     $id=$_REQUEST["id"];
     $q="select * from addproduct where pro_id=$id";
     if($res=mysqli_query($con,$q)){
        if($row=mysqli_fetch_array($res)){

     ?>
         </div><br>
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
        <br>
        <h4>Quantity:<input type="number" name="quantity" min="1" max="5" placeholder="1" class="quantity"></h4>
        <br>
        <div class="pro-infotext" >
            <h3>Description:</h3>
          <p> <?php echo $row[7]?></p>
        </div>
             <input type="hidden" name="pro_id" value="<?php echo $row[0]?>">
            <input type="hidden" name="image" value="<?php echo $row[3]?>">
            <input type="hidden" name="name" value="<?php echo $row[1]?>">
            <input type="hidden" name="price" value="<?php echo $row[2]?>">
            <input type="hidden" name="categeory" value="<?php echo $row[8]?>">
            <?php
            if($row[9]>0){
                echo "<a href='addcart.php'><button  name='shopbtn' style='background-color:#FFA41C;color:black'>ADD TO CART</button></a>";
            }
            else{
                echo "<a href=''><button disabled='disabled name='shopbtn' style='background-color:#FFA41C;color:black' >OUT OF STOCK</button></a>"; 
            }
            ?>
           
       <br>
      
        <div class="pro-review">
            Review The Product:
        <i class="fa-solid fa-star"id="r1" onclick= review(1)></i>
        <i class="fa-solid fa-star" id="r2" onclick= review(2)></i>
        <i class="fa-solid fa-star" id="r3" onclick= review(3)></i>
        <i class="fa-solid fa-star" id="r4" onclick= review(4)></i>
        <i class="fa-solid fa-star"  id="r5" onclick= review(5)></i>
        <input type="hidden"  name="review" id="reviewIns" value=0 >

        </div>
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