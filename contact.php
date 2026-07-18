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

</head>

<body>
<?php
    
    if(isset($_REQUEST["mode"]))
    {
        if($_REQUEST["mode"]=="success")
        {
            echo"<script>alert('Successfully sent message')</script>";

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
            <a href="userhome.php">Products</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">logout</a>
            </div>
        </div>
    </header>
    <div class="containts1">
        <div class="contact">
            <div class="box">
                <i class="fa-solid fa-location-dot"></i>
                <span>Address:</span>
                <p>Rajarampuri 2nd Lane,Kolhapur</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-phone"></i>
                <span>Mobile No:</span>
                <p>+91 8805778083</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-envelope"></i>
                <span>Mail:</span>
                <p>rahul@gmail.com</p>
            </div>
        </div>
       <div class="square">
             <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
            <form action="enquiry.php" method="POST">
                <h3>SEND MESSAGE</h3>
               
                <label for="username">Name</label>
                <input type="text" placeholder="name" name="username" id="username">

                <label for="password">Mobile No</label>
                <input type="Text" placeholder="Mobile No" name="mobile" id="mobile">

                <label for="username">Message</label>
                <input type="text" placeholder="Text Here" name="message" id="username">

                <button name="btnsave" >Send Message</button>

            </form>
        </div>
        <div class="copyright1">
            ©2023,kolhapuri All right reserved
        </div>

    </div>
    
    

</body>

</html>