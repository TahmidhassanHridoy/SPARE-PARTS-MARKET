<?php
$token = "";
$token2 ="";
session_start();
if(isset($_SESSION["uname"])){
    
    echo " ";
    $token ="\SparePartsMarket\Session\Signoutprocess.php";
    $token2 = "Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Spare Parts Market  | Component</title>
   <link rel="stylesheet" href="/SparePartsMarket/Css/Subpages.css">
    <script src="/SparePartsMarket/js/Cart_oparation.js" async></script>
 
</head>
<body>
<p style="text-align:left">
<?php
if(isset($_SESSION["uname"])){
    echo "username:"."<b style=\"color:blue\">".$_SESSION["uname"]."</b><br>";
    echo "<br>Your Profile pic:<br>";
    echo "<img src=\"profilepic.jpeg\" width=\"100\" hight=\"120\">";
}   
?>
</p>
<br>
<a href= "main.php">Home page </a><br>
<a href= "">My Cart</a><br>
<a href=<?php echo $token; ?> > <?php echo $token2 ; ?> </a>
<div>
    <table border="7">
        <th><h2 style="color:Green">BAJAJ spare parts</h2></th>
        <tr>
        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\Airfilter.jfif"  width="150" hight = "150"></td><td><div class="shop-item"><td><div class="shop-item">     
                 
                 
<img class="item-image"hop-item"><td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\brakeshoe.jfif"  width="150" hight = "150"></td><td><div class="shop-item">
                        <img-item"><td><div class="shop-item">
                        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\capshifter.jfif"  width="150" hight = "150"></td>
         <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\chainspocket.jfif"  width="150" hight = "150"></td><imgitem">
                        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\cluchplate.jfif"  width="150" hight = "150"></td>
        </tr>
        <tr>
        <td><h3>AIRFILTER</h3><br>Add to Cart</a><br>Review</td>
        <td><h3>BRAKESHOE</h3><br>Add to Cart</a><br>Review</td>  
        <td><h3>CAMSHIFTER</h3><br>Add to Cart</a><br>Review</td> 
        <td><h3>CHAIN SPOCKET</h3><br>Add to Cart</a><br>Review</td>
        <td><h3>CLUCH PLATE</h3><br>Add to Cart</a><br>Review</td>
        </tr>
        <tr>
        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\enginparts.jfif"  width="150" hight = "150"></td><td><div class="shop-item"><td><div class="shop-item">     
                 
                 
<img class="item-image"hop-item"><td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\indicator.jfif"  width="150" hight = "150"></td><td><div class="shop-item">
                        <img-item"><td><div class="shop-item">
                        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\oil filter.jfif"  width="150" hight = "150"></td>
         <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\sparkplug.jfif"  width="150" hight = "150"></td><imgitem">
                        <td><div class="shop-item">     
                 
                 
<img class="item-image" src="\SparePartsMarket\BAJAJ_SPAREPARTS\sylinder.jfif"  width="150" hight = "150"></td>
        </tr>
        <tr>
        <td><h3>ENGIN PART</h3><br>Add to Cart</a><br>Review</td>
        <td><h3>INDICATOR</h3><br>Add to Cart</a><br>Review</td>
        <td><h3>OIL FILTER</h3><br>Add to Cart</a><br>Review</td>   
        <td><h3>SPARK PLUG</h3><br>Add to Cart</a><br>Review</td>
        <td> <h3>SYLINDER KIT</h3><br>Add to Cart</a><br>Review</td>
        </tr>          
               </table> 
    </section> 
</section>  
    </div>
    <footer class="footer" id="contact">
    <p> <a href= "">Need help</a> 
         <h2 class="item-title">SPARE PARTS MARKET</h1>
        <h3>ADDRESS: MOTIJIL DHAKA</h2>
        <h3>EMAIL:SPAREPARTSMARKET@GMAIL.COM</h3>
        <h3>PHONENUMBER:0123324809230</h4>
        <h4 class="item-price">CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
        <h4 class="item-price">BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h4><br>
        <a href= "">Need help</a><br>
    </p>
    </footer>
</body>
</html>