<?php
$token = "";
$token2 ="";
session_start();
if(isset($_SESSION["uname"])){
    
    $token ="\SparePartsMarket\Session\sellersignoutop.php";
    $token2 = "Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spare Parts Market | homepage</title>
    <link rel="stylesheet" href="/SparePartsMarket/Css/sellerpage.css">
</head>
<body>
        <nav class="navbar">
                <div class="top">
                    <div class="left">
                       <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                        <span>Spare Parts Market</span>
                    </div>
                    <ul class="menu">
                        <li><a href="#contact">about</a></li>
                        <li><a href=<?php echo $token;?>><?php echo $token2 ;?></a></li>
                        <li class="user">
                            <?php
                                        if(isset($_SESSION["uname"])){
                                            echo "Sellername:"."<b style=\"color:blue\">".$_SESSION["uname"]."</b>";
                                        }   
                                        if(isset($_SESSION["uname"])){
                                            echo "<br>Seller Profile img:";
                                            echo "<img src=\"profilepic.jpeg\" width=\"40\" hight=\"30\">";
                                        }   
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
    <div>
        <section id="productdetail">
           
                <h1>Insert Product</h1>
                <form id="formValue">
                    <input type="text" name="productname" id="productname" placeholder="product- name" >
                    <input type="text" name="price" id="price" placeholder="price" >
                     <button id="insert">Insert</button>
                 </form>
        </section>
        <div>
        <section id="Productdetail">
                <h1>Inserted Product</h1>
                <button  id="grab">Show-Product-Detail</button>
        </section>
        <section id="detail">
                    <div id="INFO"></div>
                    <script src="/SparePartsMarket/Ajax/productget.js"></script> 
        </section>
        </div>    
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
        <script src="\SparePartsMarket\Ajax\productset.js"></script>
</body>
</html>