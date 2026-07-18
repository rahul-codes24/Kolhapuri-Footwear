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
    <link rel="stylesheet" href="style.css?v=7">
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
            <a href="addproduct.php" >Addproduct</a>
                <a href="admin_pro.php" >View Products</a>
                <!-- <a href="adminenquiry.php">Enquiries</a> -->
                <a href="admin_order.php" >Orders</a>
                <a href="reports.php" id="active">Reports</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="login" style="min-height:44vh">
        
    <div class="login-box">
                <h3>Reports</h3>
                <div class="report">
                    <form action="monthlypdf.php" method="POST">
                    <div><label>Monthly Revenue</label></div>
                   <div> <select name="month" id="">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select> 
                    <select name="year" id="">
                        <option value="2024">2024</option>
                    </select></div>
                    <div><input type="submit" value="CHECK"></div>
                    </form>
                </div>
                <div class="report">
                    <form action="yearlyreport.php" method="POST">
                <div><label>yearly Revenue</label></div>
                <div><select name="year" id="">
                        <option value="2024">2024</option>
                    </select></div>
                    <div><input type="submit" value="CHECK"></div>
                    </form>
                </div>
                <div class="report">
                    <form action="trendingpro.php" method="POST">
                    <div><label>Top Trending Products</label></div>
                    <div><select name="year" id="">
                        <option value="2024">2024</option>
                    </select></div>
                    <div><input type="submit" value="CHECK"> </div>
                    </form>
                </div>
                <div class="report">
                    <form action="totalpropdf.php" method="POST">
                    <div><label>List of All Products</label></div>
                   
                    <div><input type="submit" value="CHECK"> </div>
                    </form>
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
    <script>
        // pasage=document.getElementById("description").value;
        // newpassage=pasage.raplaceAll("'",'');
        // document.getElementById("description").innerHTML='newpassage';
        
        </script>

</body>

</html>