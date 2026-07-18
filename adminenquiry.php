

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kolhapuri</title>
        <link rel="icon" href="about/design1.jpg" type="image/icon type">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
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
                    <a href="addproduct.php">Addproduct</a>
                    <a href="admin_pro.php">View Products</a>
                    <a href="adminenquiry.php" id="active">Enquiries</a>
                    <a href="admin_order.php">Orders</a>
                    <a href="logout.php">logout</a>
                </div>
            </div>
        </header>
        <div class="containts" style="background-color:#f1efef">

            <div class="body-box">

                <h3>Enquiries</h3>
                <div class="table">
                    <?php
                    include("connection.php");
                    $q="select * from enquiry";
                    if($res=mysqli_query($con,$q)){

                    while($row=mysqli_fetch_array($res))
                    {
                    ?>
                    <div class="row" style="border-bottom:3px solid #f1efef">
                    <?php echo $row[0]?>
                   <?php echo $row[1]?>
                    <?php echo $row[2]?>
                   <?php echo $row[3]?>
                    <div class="respond"><button>Respond</button></div>
                    </div>
                    <?php
                    }
                    }

                    ?>

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

    </body>

</html>
