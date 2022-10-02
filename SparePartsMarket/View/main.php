<?php
if(session_status() >= 0){
    session_status();
    if(isset($_SESSION["uname"])){
        header("refresh: 1; url = main.php" );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Spare Parts Market  | Customar login</title>
    <link rel="stylesheet" href="\SparePartsMarket\Css/main.css">
</head>
<body>
    <nav class="navbar">
    <div class="top">
        <div class="left">
        <a href= ""><img src="sparepartsmarket logo.jpg"  width="70" hight = "70"></a> 
        <span>Spare Parts Market</span>
        </div> 
        <div class="right"> 
                 <div class="login">
                        <form action="\SparePartsMarket\Session\Signinprocess.php" method="post"> 
                            USERNAME/EMAIL: <input type="text" name="uname" required>PASSWORD: <input type="password" name="pass" required>
                            <input type="submit" name="submit">
                       </form> 
                 </div>
            <ul class="menu"> 
                    <li><a href="sellerlogin.php">Seller login</a></li>
                    <li><a href="Signup.php">Sign up</a></li>
                    <li><a href="#footer">About Us</a></li>
            </ul>
        </div>
    </div>
    </nav>            
             <div style ="background-color:LightGray;"> 
                <table>
                        <h1 >Bike Section </h1>
                        <tr>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\Bajaj\Bajaj-logo.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\hero\Hero-logo.png"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\runner\runner.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\suzuki\suzuki.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\yamaha\yamaha.jpeg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\Tvs\TVS_Motor_Company.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\kawsaki\kawsaki.png"  width="220" hight = "220"></td>
                        </tr> 
                        <tr> 
                            <td><h2 ><a href= "Signup.php">BAJAJ</h2></td>
                            <td><h2 ><a href= "Signup.php">HERO</h2></td>
                            <td><h2 ><a href= "Signup.php">RUNNER</h2></td>
                            <td><h2 ><a href= "Signup.php">SUZUKI</h2></td>
                            <td><h2 ><a href= "Signup.php">YAMAHA</h2></td>
                            <td><h2 ><a href= "Signup.php">TVS</h2></td>
                            <td><h2 ><a href= "Signup.php">kawsaki</h2></td>
                        </tr>
                        <tr>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\kTm\KTM-logo-1200x1085.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\Lifan\lifan.png"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\taro gp\taro.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\kee way\keeway-vector-logo.png"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\Gpx\GPX.jpeg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Bike_img\Beneli\beneli.jpg"  width="220" hight = "220"></td>
                        </tr> 
                        <tr>
                            <td><h2 ><a href= "Signup.php">KTM</h2></td>
                            <td><h2 ><a href= "Signup.php">Lifan</h2></td>
                            <td><h2 ><a href= "Signup.php">terogp</h2></td>
                            <td><h2 ><a href= "Signup.php">kee way</h2></td>
                            <td><h2 ><a href= "Signup.php">Gpx</h2></td>
                            <td><h2 ><a href= "Signup.php">Beneli</h2></td>
                        </tr>
                      </table> 
    </section>
            </div>
            <div style ="background-color:LightGray;">   
                <table>
                        <h1 >Car Section </h1>
                        <tr>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Honda\download.png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Hyundai\download (1).png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Mitsubishi\download (1).png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\toyota\download.png"  width="300" hight = "400"></td> 
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Suzuki\download (1).png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Range rover\download.png"  width="300" hight = "400"></td>
                        </tr>
                        <tr>
                            <td><h2 ><a href= "Signup.php">HONDA</h2></td>
                            <td><h2 ><a href= "Signup.php">HUNDAI</h2></td>
                            <td><h2 ><a href= "Signup.php">Mitsubishi</h2></td>
                            <td><h2 ><a href= "Signup.php">TOYOTA</h2></td>
                            <td><h2 ><a href= "Signup.php">SUZUKI</h2></td>
                            <td><h2 ><a href= "Signup.php">Range Rover</h2></td>
                        </tr>
                        <tr>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Audi\download.png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Bmw\download (1).png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Mercedes Benz\download.png"  width="300" hight = "400"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\Car_img\Nissan\download.jpg"  width="300" hight = "400"></td> 
                        </tr>
                        <tr>
                            <td><h2 ><a href= "Signup.php">AUDI</h2></td>
                            <td><h2 ><a href= "Signup.php">BMW</h2></td>
                            <td><h2 ><a href= "Signup.php">MERCEDES</h2></td>
                            <td><h2 ><a href= "Signup.php">NISSAN</h2></td>
                        </tr>
                      </table> 
    </section>
            </div>
            <div style ="background-color:LightGray;">
                <table>
                        <h1 >Engin oil Section </h1>
                        <tr>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\Castrol Active\download.jpg"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\Havoline\download.png"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\Liquimoly\Liqui-Moly-Logo.png"  width="220" hight = "220"></td>
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\Mobil\1200px-Mobil-logo.svg.png"  width="220" hight = "220"></td> 
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\Motul\Motul-logo.jpg"  width="220" hight = "220"></td> 
                            <td><a href= "Signup.php"><img src="\SparePartsMarket\EnginOil_img\shellAdvance\shell-advance.png"  width="220" hight = "220"></td> 
                        </tr>
                        <tr>
                            <td><h2 ><a href= "Signup.php">Castrol Active</h2></td>
                            <td><h2 ><a href= "Signup.php">Havoline</h2></td>
                            <td><h2 ><a href= "Signup.php">Liquimoly</h2></td>
                            <td><h2 ><a href= "Signup.php">Mobil</h2></td>
                            <td><h2 ><a href= "Signup.php">Motul</h2></td>
                            <td><h2 ><a href= "Signup.php">Shell Advance</h2></td>
                        </tr>
                      </table> 
    </section>
            </div>
            <br>
    <footer class="footer" id="footer">
            <p>  
                <h1>SPARE PARTS MARKET</h1>
                <h3 >ADDRESS: MOTIJIL DHAKA</h3>
                <h3 >EMAIL: SPAREPARTSMARKET@GMAIL.COM</h3>
                <h3 >PHONE NUMBER: 0123324809230</h3>
                <h3 >CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                <h3 >BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
                <h3 class="website"><a href="main.php">www.sparepartsmarket.com</a></h3>
            </p>
    </footer>>
</body>
</html>