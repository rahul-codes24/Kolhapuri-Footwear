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
    <link rel="stylesheet" href="style.css?v=4">

</head>

<body>
    

    <?php   
    if(isset($_REQUEST["status"])){
    
    echo"<script>alert('Permission Denied')</script>";
    }
    
    ?>
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
      <div class="login" >
        
       <div class="login-box">
            
            <form  name="frm1" action="logincode.php" method="POST">
                <h3>LOGIN</h3>
                <div class="login2">
                    <i class="fa-brands fa-google"></i>
                    Login With Google
                </div>
                <hr>
               <div class="login1">
                <h4><label >EMAIL</label></h4>
                <input type="text" name="userid" placeholder="email" >
            </div>
            <div class="login1">
               <h4> <label >PASSWORD</label></h4>
                <input type="password" name="password" placeholder="password"  >
            </div>
                
            <div class="login1">
                <button name="btnsave">LOGIN</button>
            </div>
            <div class="login1">
            <h5>Dont Have Account? <a href="register.php">Register here</a></h5>
        </div>
            </form>
        </div>
        

    </div>
    <div class="copyright">
        ©2023,kolhapuri All right reserved
    </div>

    

</body>

</html>