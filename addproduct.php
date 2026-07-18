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
    <link rel="stylesheet" href="style.css?v=6">
    <style>
        .login-box{
           
            padding-bottom: 50px;
            text-align: center;
        }
        
    </style>

</head>

<body>
    <?php
    
    if(isset($_REQUEST["mode"]))
    {
        if($_REQUEST["mode"]=="success")
        {
            echo"<script>alert('Product Added Successfully')</script>";

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
                <a href="addproduct.php" id="active">Addproduct</a>
                <a href="admin_pro.php">View Products</a>
                <!-- <a href="adminenquiry.php">Enquiries</a> -->
                <a href="admin_order.php">Orders</a>
                <a href="reports.php">Reports</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="login">
        
    <div class="login-box">
                <h3>ADD PRODUCTS</h3>

                <form enctype="multipart/form-data" action="addprocode.php"method="POST">
                    <div class="login1">
                        <h4><label>Enter Name Of Product</label></h4>
                        <input type="text" name="name" required="required">
                    </div>
                    <div class="login1">
                        <h4><label>Enter Price Of The Product</label></h4>
                        <input type="text" name="price" required="required">
                    </div>
                    <div class="login1">
                        <h4><label>Enter Description Of The Product</label></h4>
                        <input type="text" id="description" name="description" placeholder="dont use (')" required="required">
                    </div>
                    <h5><label>Upload 4 Image Of product</label></h5>
                    <div class="imgs">
                        
                        <div class="login3 ">
                            
                            <input type="file" name="img1" required="required">

                        </div>
                        <div class="login3">

                            <input type="file" name="img2" required="required">
                        </div>
                    </div>
                    <div class="imgs">
                        <div class="login3">

                            <input type="file" name="img3" required="required">
                        </div>
                        <div class="login3 ">

                            <input type="file" name="img4" required="required">
                        </div>
                    </div>
                    <div class="login1 ">
                        <h4><label >select Categeory</label></h4>
                        <select name="categeory" require="required">
                            <option>select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                    <div class="login1">
                        <h4><label>Enter Stock</label></h4>
                        <input type="text" id="stock" name="stock" placeholder="ENTER STOCK" required="required">
                    </div>
                    <div class="login1">
                        <input type="submit" value="SUBMIT" name="btnsubmit">
                    </div>

                </form>

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
    <script>
        // pasage=document.getElementById("description").value;
        // newpassage=pasage.raplaceAll("'",'');
        // document.getElementById("description").innerHTML='newpassage';
        
        </script>

</body>

</html>