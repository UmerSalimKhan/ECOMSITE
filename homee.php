<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signup.html');
}
?>
<html>
<head>
<link rel="stylesheet" href="css/sttyles.css">
<style>
    div {
      background-image: url("image/iphone11cases-lowres-2x1-8169.jpg");
    }    </style>
    
<body>

    <div class="container">
        <div class="navbar">
            <div class="menu">
            <a href="signup.html" class="btn">Logout</a>
                <!-- <h3 class="logo"><span>ElectroMate</span></h3> -->
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="main">
                <header>
                    <div class="overlay">
                        <h2 class="title">Electromate</h2>
                        <h1 class= "logo"><span> Welcome</span> <?php  echo  $_SESSION['username']; ?> </h1>
                        <a href="catogory.html" class="btn">BUY IT</a>
                    </div>
                </header>
            </div>
            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>
        <div class="links">
            <ul>
                <li class="active">
                    <a href="home.html" style="--i: 0.05s">Home</a>
                <!-- </li>
                <li>
                    <a href="about" style="--i: 0.1s">About</a> -->
                </li>
                <li>
                    <a href="signup.html" style="--i: 0.15s">Sign up</a>
                </li>
                <li>
                    <a href="catogory.html" style="--i: 0.2s">Catogry page</a>
                </li>
                <li>
                    <a href="contact us.html" style="--i: 0.2s">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </div>

</body>
<script src="java.s/homejs.js"></script>
</head>
</html>