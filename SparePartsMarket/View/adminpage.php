<?php

session_start();
if(isset($_SESSION["username"])){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spare Parts Market | Admin Panel</title>
    <link rel="stylesheet" href="/SparePartsMarket/Css/adminpage.css">
</head>
<body>
    `    <nav class="navbar">
                <div class="top">
                    <div class="left">
                       <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                        <span>Spare Parts Market</span>
                    </div>
                    <ul class="menu">
                        <li><a href="\SparePartsMarket\Session\adminsignout.php">Sign Out</a></li>
                        <li class="user">
                            <?php
                                        if(isset($_SESSION["uname"])){
                                            echo "DEVname:"."<b style=\"color:blue\">".$_SESSION["uname"]."</b>";
                                        }   
                                        if(isset($_SESSION["uname"])){
                                            echo "<br>Dev Profile pic:";
                                            echo "<img src=\"profilepic.jpeg\" width=\"40\" hight=\"30\">";
                                        }   
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        <section class='button'>
        <div id="userdetail">
                <h1>Users Details</h1>
                <button  id="grab">Show-USER-Detail</button>
        </div>
        <div id="sellerdetail">
                <h1>seller detail</h1>
                    <button  id="grab2">Show-Seller-Detail</button>
        </div>
        <div id="devuserdetail">
                <h1>dev user detail</h1>
                    <button  id="grab3">Show-Admins-Detail</button>
        </div>
        <div id="productdetail">
                <h1>productdetail</h1>
                    <button  id="grab4">Show-product-detail</button>
        </div>
        </section>
        <section class='info'>
        <div id="detail">
                    <div id="INFO"></div>
                    <script src="/SparePartsMarket/Ajax/getuserinfo.js"></script> 
        </div>
        <div id="detail">
                    <div id="INFO"></div>
                    <script src="\SparePartsMarket\Ajax\getsellerinfo.js"></script>
        <div id="detail">
                    <div id="INFO"></div>
                    <script src="/SparePartsMarket/Ajax/getadmininfo.js"></script>
        </div>
        <div id="detail">
                    <div id="INFO"></div>
                    <script src="/SparePartsMarket/Ajax/getproductdetail.js"></script>
        </div>
        </section>
        <footer class="footer" id="contact">
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