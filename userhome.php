<!-- This Is user site home page from -->

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
         <script>
            
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
        <div class="categeory">
            Select Categeory<br><br>
            <a href="userhomeMale.php" ><button id="catbtn">MALE</button></a>
            <a href="userhomeFemale.php"><button id="catbtn">FEMALE</button></a>
            <a href="userhome.php"id="#active"><button id="catbtnactive">ALL</button></a>
            
            </div>
           

        <div class="procon-buy">
            
        <?php
        include("connection.php");
        session_start();
        if(!isset($_SESSION["uname"])){
            header("Location:index.html");
        }
        // if(isset("categeory")){
        //     $Cat=$_POST['categeory'];
        //     echo($cat);
        // }
        
         $q="select * from addproduct ";
         $result=mysqli_query($con,$q);
         while($row=mysqli_fetch_assoc($result)){

         
         ?>
            <div class="pro-buy1">
          
                <div class="buy-img">
                   <input type="hidden" name="pro_id" value="<?php echo $row['pro_id']?>">
                  <?php echo" <a href='productView.php? id=$row[pro_id] '>"?> 
                  <?php if($row['pro_id']==2)
                  {
                    echo"<span> <img src='about/seller.png'  id='bestseller'></span>";
                  }?>
                  <img src="<?php  echo $row['image']?>" name="image" alt="Kolhapuri"></a>
                </div>
                <div class="buy-text">
                    <p><?php echo $row['name']?> </p>
                   
                    <b>Price:</b><h2>₹<?php echo $row['price']?><span>₹<?php echo ($row['price'])*2?></span> </h2> (Inclusive of all taxes)
                    
                    
                    <?php
                        if($row['stock']>0){
                            echo"<a href='productView.php? id=$row[pro_id]'><h3><button>Shop Now</button></h3></a>";

                        }
                        else{
                            echo "<a href=''><h3><button disabled='disabled'>Out Of Stock</button></h3></a>";
                        }
                        ?>
                    

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