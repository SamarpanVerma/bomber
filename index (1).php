
<?php

session_start();

$server ="sq1307.epizy.com";
$username ="epiz_32498091";
$password ="ooVHYjruryhL";
$dbname = "epiz_32498091_technical";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Design With Animation Using Only HTML & CSS | Waves Animation, Dropdown Menu, Multiple Circle Rotation</title>
    <link rel="stylesheet" href="main-style.css">
    <style>
    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9); 
        overflow-x: hidden;
        transition: 0.5s;
      }
      
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }
      .logo-img{
        width: 40px;
      }

      .navbar-link{
        color: #aba9b4;
        font-family: Space Grotesk;
      }

      .navbar-link:hover{
            background-color: #f09053;
            color: #fff;
        }
      .credit-design{
          color: #aba9b4;
          font-family: Space Grotesk;
          font-weight: bold;
      }
        
      
      @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
        }
      }
      </style>


</head>
<body>

<div class="wrapper">
    <header>
        <nav>
           
                <span class="navbar-link" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; BOMBER</span>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                          <a href="smsBomb.php">SMS BOMBER</a>
                          <a href="callBomb.php">CALL BOMBER</a>
                          <a href="whatsappBomb.php">WHATSAPP BOMBER</a>
                          <a href="mixBomb.php">MIX BOMBER</a>
                          <a href="https://telegram.me/no_1_smsbomber"><img class="logo-img" src="images/tele.png" alt="telegram-photo"></a>
                          <p><span class="credit-design">Developed By : SAMARPAN & RAKESH.</span></p>
                        </div>
                      </div>
                <!--
                <li><a href="#">API</a></li>
                <li><a href="#"></a></li>       -->
                
            <!--    <li><a class="btn" href="#">Sign Up</a></li>    -->  

        </nav>
    </header>

    <div class="content-img">
        <div class="img">
            <div class="social-icons">
                <img src="images/social-icon1.png" alt="">
                <img src="images/social-icon2.png" alt="" onclick="">
                <img src="images/social-icon3.png" alt="">
                <img src="images/social-icon4.png" alt="">
            </div>
            <img class="email-icon" src="images/email-icon.png" alt="">
        </div>
        </div>

    <div class="content">
 

        <div class="text">
            <div class="logo">
                <img src="images/logo.gif" alt="">
            </div>
            <p>Note : Just use for fun ... <span>Don't harm anyone...</span> If you use this tool for revenge, developer is not responsible. You can use this app only for pranking your friends.</p>
            <a href="#" class="btn" onclick="openNav()">Get Started</a>
        </div>
        
    </div>
<!--
<div class="wave">
    <img src="images/wave.svg" alt="">
</div>
-->

</div>



<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</body>
</html>