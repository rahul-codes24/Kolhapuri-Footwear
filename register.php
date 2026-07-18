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
    <link rel="stylesheet" href="style.css?v=11">
    <script src="https://smtpjs.com/v3/smtp.js">
</script>


</head>

<body>
    <?php
    if(isset($_REQUEST["mode"])){
        echo"<script>alert('This email is already registered')</script>";
    }

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
    <div class="login" >
        
       <div class="login-box">
            
            <form name="frm2" action="sendotp.php" method="POST" onsubmit="return val()">
                <h3>REGISTRATION</h3>
                <div class="login2">
                    <i class="fa-brands fa-google"></i>
                    Login With Google
                </div>
                <hr>
               <div class="login1">
                <h4><label >Name</label></h4>
                <input type="text" name="name" id="name" title="Invalid Name" placeholder="name" required="required" >
            </div>
            <div class="login1">
               <h4> <label >Mobile</label></h4>
                <input type="mobile" name="mobile" id="mobile" placeholder="Mobile" required="required" >
            </div>
            <div class="login1">
                <h4> <label >E-Mail</label></h4>
                 <input type="mail" name="mail" id="mail"   placeholder="gmail" required="required" >
             </div>
             <div class="login1">
                <h4> <label >Set Password</label></h4>
                 <input type="password" id="set_pass" name="set_pass"  required="required" >
             </div>
             
             <!-- <div class="login1">
                <h4> <label >Confirm Password</label></h4>
                 <input type="password" id="con_pass" name="con_pass"  >
                 <span id="txtmsg"></span>
             </div> -->
            
             <!-- Please verify Email:
             <input type="checkbox" id="checked" onclick=getotp()  required="required" > -->
             
             
             <!-- <div class="login1">
                <h4> <label >Enter OTP</label></h4>
                 <input type="text" id="otp" name="otp"  required="required" >
             </div> -->
                
            <div class="login1">
                <button name="btnregister" id="btnsave" style='background-color:#FFA41C'>AUTHENTICATE</button>
            </div>
            <div class="login1" id="msg" style="text-align:center;color:red">
                
            </div>
            <div class="spiner" id="spiner"  ></div>
            <div class="login1">
            <h5>Already registerd? <a href="login.php">login here</a></h5>
        </div>
       
            </form>
        </div>
        

    </div>
    <div class="copyright">
        ©2023,kolhapuri All right reserved
    </div>

        
<script>
 
 spiner=document.getElementById("spiner");
     spiner.style.display="none";  
    
       

 function val(){
    
     
     var name=document.frm2.name.value;
     var email=document.frm2.mail.value;
     var mobile=document.frm2.mobile.value;
     var password=document.frm2.set_pass.value;
    


     if(name==""){
         alert("Please Enter Your Name");
         document.frm2.name.focus();
       }
         else if(!name.match(/^([a-zA-Z'-.]+ [a-zA-Z'-.]+)$/))
         {
         alert("Please ENter Your Correct Name");
         document.frm2.name.value="";
         document.frm2.name.focus();
         return false;
     }


 
    var exp=/^[6-9]\d{9}$/;
     if(isNaN(mobile)){
     alert("Please Enter Correct Mobile");
         document.frm2.mobile.focus();
         document.frm2.mobile.value="";
         return false;
     }
 
      else if(!exp.test(mobile)){

     alert("Please Enter Correct Mobile");
     document.frm2.mobile.value="";
         document.frm2.mobile.focus();
         return false;

       }





  var mail=email.toLowerCase();
  var emailregex=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
  if(!emailregex.test(mail)){
     alert("Please Enter Correct Email");
     document.frm2.mail.value="";
         document.frm2.mail.focus();
         return false;
  }
 
 
  if(password.length<4){
     alert("Please Enter password atleat 4 characters or numbers");
     document.frm2.setpass.value="";
     document.frm2.set_pass.focus();
     return false;
  }

  chk1=document.getElementById("set_pass").value;

             chk2=document.getElementById("mail").value;
             chk3=document.getElementById("mobile").value;
             chk4=document.getElementById("name").value;
             showmsg=document.getElementById("msg");
             if(chk1!="" && chk2!="" && chk3!=""&& chk4!=""){
                 btnsave=document.getElementById("btnsave");
            btnsave.style.display="none";
            spiner.style.display="block";
            showmsg.innerHTML="Just Wait For Process";
             }
  
  

 }



</script>
    

</body>

</html>