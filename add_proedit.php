<!--This is the Admin frontend page for add product into addproduct databse-->

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
    <link rel="stylesheet" href="style.css?v=2">
    <style>
        .login-box{
           
            padding-bottom: 50px;
            text-align:center;
        }
        
    </style>

</head>

<body>
  
    <header>
        <div class="navbar">
            <div class="nav-logo">
            </div>
            <div class="nav-menu">
                <a href="addproduct.php" >Addproduct</a>
                <a href="admin_pro.php" style="color:gray;">View Products</a>
                <a href="admin_order.php">Orders</a>
                <a href="reports.php">Reports</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="login">
        
        <div class="login-box">
        <h3>UPDATE PRODUCTS</h3>
        <?php
        include("connection.php");
        session_start();
        $pro_id=$_REQUEST["pro_id"];
        
        $q="select * from addproduct where pro_id=$pro_id";
        if($res=mysqli_query($con,$q))
        {
            if($row=mysqli_fetch_array($res))
            {
               ?> 
            

        
       
           <form enctype="multipart/form-data" action="add_proeditcode.php" method="POST">
            <div class="login1">
            <h4><label>Enter Name Of Product</label></h4>
            <input type="text" name="name" value="<?php echo $row[1]?>">
        </div>
            <div class="login1">
                <h4><label>Enter Price Of The Product</label></h4>
            <input type="text" name="price"  value="<?php echo $row[2]?>">
        </div>
                    <div class="login1">
                        <h4><label>Enter Description Of The Product</label></h4>
                        <input type="text" name="description" value="<?php echo $row[7]?>">
                    </div>
                    <h5><label>Upload 4 Image Of product</label></h5>
                    <div class="imgs">
                        
                        <div class="login3 ">
                            
                            <input type="file" name="img1" >
                            <input type="hidden" name="img1"value="<?php echo $row[3]?>">

                        </div>
                        <div class="login3">

                            <input type="file" name="img2"  >
                            <input type="hidden" name="img2"value="<?php echo $row[4]?>">
                        </div>
                    </div>
                    <div class="imgs">
                        <div class="login3">

                            <input type="file" name="img3">
                            <input type="hidden" name="img3"value="<?php echo $row[5]?>">
                        </div>
                        <div class="login3 ">

                            <input type="file" name="img4" >
                            <input type="hidden" name="img4"value="<?php echo $row[6]?>">
                        </div>
                    </div>
                    <div class="login1 ">
                        <h4><label >select Categeory</label></h4>
                        <select name="categeory" require="required" >
                            <option>select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <input type="hidden" name="categeory2"  value="<?php echo $row[8]?>">
                    </div>
                    <div class="login1">
                        <h4><label>Enter Stock</label></h4>
                        <input type="text" id="stock" name="stock" value="<?php echo $row[9]?>" required="required"  style="text-align:center">
                    </div>
        <input type="hidden" name="pro_id" value="<?php echo $row[0]?>">
            <div class="login1">
            <input type="submit" value="SUBMIT" name="btnsubmit">
        </div>

           </form>
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