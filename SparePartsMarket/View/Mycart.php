<?php
$token = "";
$token2 ="";
session_start();
if(isset($_SESSION["uname"])){
    
    $token ="\SparePartsMarket\Session\Signoutprocess.php";
    $token2 = "Sign Out";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>pareparts market | Store</title>
        <script src="/SparePartsMarket/js/Cart_oparation.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="navbar">
                <div class="top">
                    <div class="left">
                       <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                        
                    </div>
                    <ul class="menu">
                            <li><a href="\SparePartsMarket\View\privatemain.php">Home</a></li>
                        
                        <li><a href="#contact" >About</a></li>
                        <li><a href=<?php echo $token;?>><?php echo $token2 ; ?></a></li>
                        <li class="user">
                            <?php
                                        if(isset($_SESSION["uname"])){
                                            echo "username:"."<b style=\"color:blue\">".$_SESSION["uname"]."</b>";
                                        }   
                                        if(isset($_SESSION["uname"])){
                                            echo "<br>Your Profile pic:";
                                            echo "<img src=\"profilepic.jpeg\" width=\"40\" hight=\"30\">";
                                        }   
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
             <button class="btn btn-primary purchasebutton" type="btn">purchase</button>
        </section>
    </body>
</html>