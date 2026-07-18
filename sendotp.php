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
   
</script>

    
<script type="text/javascript"> 
// timer(60);
    window.setTimeout(function(){ window.location = "register.php"; },300000);
    
       <?php  $otp=rand(1000,9999);?>

         function checkotp(){
             var getOtp=document.getElementById("otp").value;
             
            
           num=<?php echo $otp ;?>
                
            if(num==getOtp){

                
                return true;
            }
            else{
                alert("wrong otp");
                return false;
            }

        }


//         let timerOn = true;

// function timer(remaining) {
//   var m = Math.floor(remaining / 60);
//   var s = remaining % 60;
  
//   m = m < 10 ? '0' + m : m;
//   s = s < 10 ? '0' + s : s;
//   document.getElementById('timer').innerHTML = +m + ':' + s;
//   remaining -= 1;
  
//   if(remaining >= 0 && timerOn) {
//     setTimeout(function() {
//         timer(remaining);
//     }, 1000);
//     return;
//   }

//   if(!timerOn) {
//     // Do validate stuff here
//     return;
//   }
  
//   // Do timeout stuff here
//   alert('Timeout for otp');
// }



</script>
</head>

<body>


<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $mobile = $_POST["mobile"] ?? "";
    $mail = $_POST["mail"] ?? "";
    $pass = $_POST["set_pass"] ?? "";
    
    $_SESSION["reg_name"] = $name;
    $_SESSION["reg_mobile"] = $mobile;
    $_SESSION["reg_mail"] = $mail;
    $_SESSION["reg_pass"] = $pass;
} else {
    $name = $_SESSION["reg_name"] ?? "";
    $mobile = $_SESSION["reg_mobile"] ?? "";
    $mail = $_SESSION["reg_mail"] ?? "";
    $pass = $_SESSION["reg_pass"] ?? "";
}

if (empty($mail)) {
    header("Location: register.php");
    exit();
}

$a="select * from login ";
if($res=mysqli_query($con,$a)){
    while($row=mysqli_fetch_array($res)){
        if($row[2]==$mail)
        {
            header("Location:register.php?mode=exist");
            exit();
        }
    }
}

include('smtp_config.php');
$to_email=$mail;

$subject=" Kolhapuri-Ecom";
$body="<div style='text-align:center;border:1px solid black;width:400px;margin:auto;padding:10px;font-family:Arial, Helvetica, sans-serif;'>
<div>
    <h3>Your One Time Password(OTP) Is</h3>
</div>
<div>
    <h1>$otp</h1>
</div>
<div style='color:red;font-size:0.9rem;padding:20px;'>
    This Is valid Only For 5 Minutes
</div>
<div style='color:green'>
    From:<b>KOLHAPURI-ECOM</b>
</div>
</div>";

 echo smtp_mailer($to_email,$subject,$body);

  

 
?>


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
    <div class="login" style="min-height:54.8vh">
        
       <div class="login-box"  style="background-color:#F4F4F4">
            
            <form name="frm2" action="registercode.php" method="POST" onsubmit="return checkotp()">
                <h3>VERIFICATION</h3>
                
                <hr>          
                <div class="login1" style="text-align: center; text-transform: uppercase;">
                <p>OTP has been sent to you On your Registered Mail</p>
             </div>
             
             <div class="login1">
                <h4> <label >Enter OTP</label></h4>
                 <input type="text" id="otp" name="otp"  required="required" >
                 <!-- <div>Time left = <span id="timer"></span></div> -->
             </div>
             <input type="hidden"  name="name" value="<?php echo $name?>">
             <input type="hidden"  name="mobile" value="<?php echo $mobile?>">
             <input type="hidden"  name="mail" value="<?php echo $mail?>">
             <input type="hidden"  name="set_pass" value="<?php echo $pass?>">

                
            <div class="login1">
                <button name="btnregister" id="regibtn">REGISTER</button>
            </div>
            
            <div class="login1" style="text-align:center">
                <a href="sendotp.php">RESEND OTP</a>
            </div>

       
            </form>
        </div>
        

    </div>
    <div class="copyright">
        ©2023,kolhapuri All right reserved
    </div>

    

</body>

</html>