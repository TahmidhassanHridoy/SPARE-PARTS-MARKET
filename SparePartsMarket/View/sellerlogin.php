<?php
if(session_status() >= 0){
    session_status();
    if(isset($_SESSION["uname"])){
        header("refresh: 1; url = /SparePartsMarket/View/sellerlogin.php" );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spare Parts Market | Seller Login</title>
    <link rel="stylesheet" href="/SparePartsMarket/Css/sellerlogin.css">
</head>
<body>
<nav class="navbar">
                <div class="top">
                    <div class="left">
                       <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                        <span>Spare Parts Market</span>
                    </div>
                    <div class="right">
                    <div class="login"> 
                        <form action="\SparePartsMarket\Session\sellerloginop.php" method="post"> 
                        USERNAME/EMAIL: <input type="text" name="uname" required>PASSWORD: <input type="password" name="pass" required>
                        <input type="submit" name="submit">
                        </form>
                    </div>
                    <ul class="menu">
                        <li><a href="main.php">Home</a></li>
                        <li><a href="#footer">About Us</a></li>
                        <li><a href="sellerreg.php">register</a></li>
                    </ul>
                    </div>
                </div>
            </nav>

            <section class="middle">
            <img src="\SparePartsMarket\backgroundimg\tom-pumford.jpg"  width="1880" hight = "620">
            </section>

    <footer class="footer" id="footer">
        <p> 
                <h1>SPARE PARTS MARKET</h1>
                <h3>ADDRESS: MOTIJIL DHAKA</h3>
                <h3>EMAIL:SPAREPARTSMARKET@GMAIL.COM</h3>
                <h3>PHONENUMBER:0123324809230</h3>
                <h3>CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                <h3>BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
            </p>
        </footer>
</body>
</html>