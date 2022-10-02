<?php
if(session_status() >= 0){
    session_status();
    if(isset($_SESSION["username"])){
        header("refresh: 1; url = /SparepartsMarket/View/adminlogin.php" );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spare Parts Market | Admin Login</title>
    <link rel="stylesheet" href="/SparePartsMarket/Css/adminlogin.css">
</head>
<body>
    <nav class="navbar">
        <div class="top">
                <div class ="left">
                           <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">     
                            <span>Spare Parts Market</span>
                </div>
                <div class="right">
                        <ul class="menu">                       
                            <li><a href="\SparePartsMarket\View\adminsignup.html">registar</a></li>
                            <li><a href="main.php">home</a></li>
                            <li><a href="#contact">About Us</a></li>
                        </ul>
                </div>
        </div>
    </nav> 
    <div class="container"> 
                        <form action="\SparePartsMarket\Session\adminloginprocess.php" method="post"> 
                        USERNAME/EMAIL: <input type="text" name="uname" required>
                        PASSWORD: <input type="password" name="pass" required>
                        <input type="submit" name="submit">
                        </form>
    </div>
    <footer class="footer" id="contact">
        <p> 
                <h1>SPARE PARTS MARKET</h1>
                <h3>ADDRESS: MOTIJIL DHAKA</h3>
                <h3>EMAIL:SPAREPARTSMARKET@GMAIL.COM</h3>
                <h3>PHONENUMBER:0123324809230</h3>
                <h3>CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                <h3>BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
                <h3 class="website"><a href="main.php">www.sparepartsmarket.com</a></h3>

            </p>
        </footer>
</body>
</html>