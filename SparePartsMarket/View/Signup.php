<?php

?>
<!DOCTYPE html>
<html lang = "en">
<head>
        <title>Spare Part Market | Signup</title>
        <link rel="stylesheet" href="/SparePartsMarket/Css/signup.css">
</head>
    <body>
        <nav class="navbar">
            <div class="top">
                <div class="left">
                   <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                    <span>Spare Parts Market</span>  
                </div>
                </div class="right">
                <ul class="menu">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="#footer" >About</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <table class="center">
            <tr><td><h1>Registration</h1></td></tr>
            <tr><td><form action="\SparePartsMarket\Session\Signupprocess.php" method="post"></td></tr>
            <tr><td><input type="text" name="fname" id="fname" placeholder="First name" required></td></tr>
            <tr><td><input type="text" name="mname" id="mname" placeholder="Middle name" required></td></tr>
            <tr><td><input type="text" name="lname" id="lname" placeholder="last name" required></td></tr>
            <tr><td><label for="birthday">Birthday:</label></td></tr>
            <tr><td><input type="date" id="birthday" name="birthday" required></td></tr>
            <tr><td><input type="email" id="email" name="email" placeholder="email" required></td></tr>
            <tr><td><input type="tel" id="phone" name="phone" placeholder="phone-number" required></td></tr>
            <tr><td><input type="text" id="username" name="uname" placeholder="user-name" required></td></tr>
            <tr><td><input type="password" id="pwd" name="pass" placeholder="password" required></td></tr>
            <tr><td><input type="password" id="cpwd" name="cpass" placeholder="Confirm-password" required></td></tr>
            <tr><td><input type="submit" name="submit"> 
            <tr><td>OR</td></tr>
            <tr><td><h2 class="item-title"><a href= "main.php">Login</h2></td></tr>
            </form>
              </table> 
    </section>
        <footer class="footer" id="footer">
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