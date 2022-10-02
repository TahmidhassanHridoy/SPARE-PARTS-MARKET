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
<html lang="en">
<head>
    <title> Spare Parts Market  | Homepage</title>
   <link rel="stylesheet" href="/SparePartsMarket/Css/privatemain.css">
</head>
<body>
    <nav class="navbar">
        <div class="top">
            <div class="left">
               <img src="\sparepartsmarket\View/sparepartsmarket logo.jpg"  width="70" hight = "70">
                <span>Spare Parts Market</span>
            </div>
            <ul class="menu">
                <li><a href="\SparePartsMarket\View\privatemain.php">Home</a></li>
                <li><a href="\SparePartsMarket\View\Mycart.php">Cart</a></li>
                <li><a href="#contact" >About</a>
                <li><a href=<?php echo $token;?>><?php echo $token2 ; ?></a></li>
                <li class="user">
                    <?php
                                echo "Day: ".date("l"); echo "Date:" .date("d/m/Y") ,"<br>" ;

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
        <br>
        <div class="brands">
            <h1> Bike Brands</h1>
                <table class="bikebrands"> "\SparePartsMarket\
                        <tr>
                            <td><a href= "#bajaj"><img src="\sparepartsmarket\Bike_img\Bajaj\Bajaj-logo.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#hero"><img src="\sparepartsmarket\Bike_img\hero\Hero-logo.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#runner"><img src="\sparepartsmarket\Bike_img\runner\runner.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#suzuki"><img src="\sparepartsmarket\Bike_img\suzuki\suzuki.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#yamaha"><img src="\sparepartsmarket\Bike_img\yamaha\yamaha.jpeg"  width="100" hight = "100"></a></td>
                            <td><a href= "#tvs"><img src="\sparepartsmarket\Bike_img\Tvs\TVS_Motor_Company.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#kawasaki"><img src="\sparepartsmarket\Bike_img\kawsaki\kawsaki.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#ktm"><img src="\sparepartsmarket\Bike_img\kTm\KTM-logo-1200x1085.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#lifan"><img src="\sparepartsmarket\Bike_img\Lifan\lifan.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#taro"><img src="\sparepartsmarket\Bike_img\taro gp\taro.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#keeway"><img src="\sparepartsmarket\Bike_img\kee way\keeway-vector-logo.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#gpx"><img src="\sparepartsmarket\Bike_img\Gpx\GPX.jpeg"  width="100" hight = "100"></a></td>
                            <td><a href= "#beneli"><img src="\sparepartsmarket\Bike_img\Beneli\beneli.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#honda"><img src="\sparepartsmarket\Bike_img\honda\honda bike logo.png"  width="100" hight = "100"></a></td>
                        </tr> 
                        <tr> 
                            <td><h2 class="item-title"><a href= "#bajaj">Bajaj</h2></td>
                            <td><h2 class="item-title"><a href= "#hero">Hero</h2></td>
                            <td><h2 class="item-title"><a href= "#runner">Runner</h2></td>
                            <td><h2 class="item-title"><a href= "#suzuki">Suzuki</h2></td>
                            <td><h2 class="item-title"><a href= "#yamaha">Yamaha</h2></td>
                            <td><h2 class="item-title"><a href= "#tvs">Tvs</h2></td>
                            <td><h2 class="item-title"><a href= "#kawasaki">kawsaki</h2></td>
                            <td><h2 class="item-title"><a href= "#ktm">Ktm</h2></td>
                            <td><h2 class="item-title"><a href= "#lifan">Lifan</h2></td>
                            <td><h2 class="item-title"><a href= "#taro">terogp</h2></td>
                            <td><h2 class="item-title"><a href= "#keeway">kee way</h2></td>
                            <td><h2 class="item-title"><a href= "#gpx">Gpx</h2></td>
                            <td><h2 class="item-title"><a href= "#beneli">Beneli</h2></td>
                            <td><h2 class="item-title"><a href= "#honda">Honda</h2></td>
                        </tr>
                      </table> 
    </section>
                <h1> Car Brands </h1>
                <table class="carbrands">
                        <tr>
                            <td><a href= "#hondacar"><img src="\sparepartsmarket\Car_img\Honda\download.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#hyundai"><img src="\sparepartsmarket\Car_img\Hyundai\download (1).png"  width="100" hight = "100"></a></td>
                            <td><a href= "#mercedes"><img src="\sparepartsmarket\Car_img\Mitsubishi\download (1).png"  width="100" hight = "100"></a></td>
                            <td><a href= "#toyota"><img src="\sparepartsmarket\Car_img\toyota\download.png"  width="100" hight = "100"></a></td> 
                            <td><a href= "#suzukicar"><img src="\sparepartsmarket\Car_img\Suzuki\download (1).png"  width="100" hight = "100"></a></td>
                            <td><a href= "#rangerover"><img src="\sparepartsmarket\Car_img\Range rover\download.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#audi"><img src="\sparepartsmarket\Car_img\Audi\download.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#bmw"><img src="\sparepartsmarket\Car_img\Bmw\download (1).png"  width="100" hight = "100"></a></td>
                            <td><a href= "#mercedes"><img src="\sparepartsmarket\Car_img\Mercedes Benz\download.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#nissan"><img src="\sparepartsmarket\Car_img\Nissan\download.jpg"  width="100" hight = "100"></a></td>
                        </tr>
                        <tr>
                            <td><h2 class="item-title"><a href= "#hondacar">Honda</h2></td>
                            <td><h2 class="item-title"><a href= "#hyundai">hyundai</h2></td>
                            <td><h2 class="item-title"><a href= "#mercedes">Mitsubishi</h2></td>
                            <td><h2 class="item-title"><a href= "#toyota">Toyota</h2></td>
                            <td><h2 class="item-title"><a href= "#suzukicar">Suzuki</h2></td>
                            <td><h2 class="item-title"><a href= "#rangerover">Range Rover</h2></td>
                            <td><h2 class="item-title"><a href= "#audi">Audi</h2></td>
                            <td><h2 class="item-title"><a href= "#bmw">Bmw</h2></td>
                            <td><h2 class="item-title"><a href= "#mercedes">Mercedes</h2></td>
                            <td><h2 class="item-title"><a href= "#nissan">Nissan</h2></td>
                        </tr>
                      </table> 
    </section>
                <h1> EnginOill Brands   </h1>
                <table class="eobrands">
                        <tr>
                            <td><a href= "#castrol"><img src="\sparepartsmarket\EnginOil_img\Castrol Active\download.jpg"  width="100" hight = "100"></a></td>
                            <td><a href= "#havoline"><img src="\sparepartsmarket\EnginOil_img\Havoline\download.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#liqui"><img src="\sparepartsmarket\EnginOil_img\Liquimoly\Liqui-Moly-Logo.png"  width="100" hight = "100"></a></td>
                            <td><a href= "#mobil"><img src="\sparepartsmarket\EnginOil_img\Mobil\1200px-Mobil-logo.svg.png"  width="100" hight = "100"></a></td> 
                            <td><a href= "#motul"><img src="\sparepartsmarket\EnginOil_img\Motul\Motul-logo.jpg"  width="100" hight = "100"></a></td> 
                            <td><a href= "#shell"><img src="\sparepartsmarket\EnginOil_img\shellAdvance\shell-advance.png"  width="100" hight = "100"></a></td> 
                        </tr>
                        <tr>
                            <td><h2 class="item-title"><a href= "#castrol">Castrol Active</h2></td>
                            <td><h2 class="item-title"><a href= "#havoline">Havoline</h2></td>
                            <td><h2 class="item-title"><a href= "#liqui">Liquimoly</h2></td>
                            <td><h2 class="item-title"><a href= "#mobil">Mobil</h2></td>
                            <td><h2 class="item-title"><a href= "#motul">Motul</h2></td>
                            <td><h2 class="item-title"><a href= "#shell">Shell Advance</h2></td>
                        </tr>
                      </table> 
    </section>
            </div>

    <section class="bike" id="bike">
            <div class="text1"><h1>BIKE'S</h1></div>
                <div class="bajaj" id="bajaj">
                <p><img src="\sparepartsmarket\Bike_img\Bajaj\Bajaj-logo.jpg"  width="100" hight = "70"></p>
                    <table>
                        <tr>
                            <td><a href= "/SparePartsMarket/PHP/Bike/Bajaj_A_street.php"><img src="\sparepartsmarket\Bike_img\Bajaj\avenger street\Bajaj-Avenger.png"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/bajaj_Neon.php"><img src="\sparepartsmarket\Bike_img\Bajaj\neon\download (1).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/bajaj_ns160.php"><img src="\sparepartsmarket\Bike_img\Bajaj\ns160\00.png"   width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/bajaj_pulser150.php"><img src="\sparepartsmarket\Bike_img\Bajaj\pulsar 150\bajaj-pulsar-150-motorcycle-spare-parts-500x500.jpg"   width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/bajaj_v15.php"><img src="\sparepartsmarket\Bike_img\Bajaj\v15\bajaj-v15-pearl-white.png"   width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\Bajaj_A_street.php">Avenger street</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\bajaj_Neon.php">Pulser Neon</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\bajaj_ns160.php">NS 160</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\bajaj_pulser150.php">Pulser 150</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\bajaj_v15.php">pulser V15</h2></td>
                        </tr>
                        <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                          </table> 
    </section>
            </div>
            <div class="hero" id="hero">
                <p><img src="\sparepartsmarket\Bike_img\hero\Hero-logo.png"  width="100" hight = "70"></p>
                <table>
                    <tr>
                        <td><a href= "/SparePartsMarket/PHP/Bike/hero_destiny125.php"><img src="\sparepartsmarket\Bike_img\hero\DESTINY 125\BIKE.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/hero_hunk.php"><img src="\sparepartsmarket\Bike_img\hero\HUNK\BIKE.jpg"   width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/hero_ignitor125.php"><img src="\sparepartsmarket\Bike_img\hero\IGNITOR 125\BIKE.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/hero_splendor+.php"><img src="\sparepartsmarket\Bike_img\hero\SPLENDER +\BIKE.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/hero_xtream160R.php"><img src="\sparepartsmarket\Bike_img\hero\XTREME 160R\hero_2.jpg"  width="250" hight = "250"></a></td>
                    </tr> 
                    <tr> 
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\hero_destiny125.php">DESTINY 125</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\hero_hunk.php">HUNK</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\hero_ignitor125.php">Ignitor 125</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\hero_splendor+.php">SPLENDER +</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\hero_xtream160R.php">XTREME 160R</h2></td>
                        <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                    </tr>
                      </table> 
    </section>
            </div>
            <div class="runner" id="runner">
                <p><img src="\sparepartsmarket\Bike_img\runner\runner.jpg"  width="100" hight = "70"></p>
                <table>
                        <tr>
                            <td><a href= "/SparePartsMarket/PHP/Bike/runner_bolt165.php"><img src="\sparepartsmarket\Bike_img\runner\bolt 165\download (3).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/runner_kiteplus.php"><img src="\sparepartsmarket\Bike_img\runner\kite plus\download (1).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/runner_knightrider v2.php"><img src="\sparepartsmarket\Bike_img\runner\knight rider v2\download (2).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/runner_roadmaster.php"><img src="\sparepartsmarket\Bike_img\runner\roadmaster\images.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/runner_rt.php"><img src="\sparepartsmarket\Bike_img\runner\rt\download.jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\runner_bolt165.php">bolt 165</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\runner_kiteplus.php">kite plus</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\runner_knightrider v2.php">knight rider</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\runner_roadmaster.php">road master</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\runner_rt.php">runner rt</h2></td>
                            <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                        </tr>
                      </table> 
    </section>
            </div>
            <div class="suzuki" id="suzuki">
                <p><img src="\sparepartsmarket\Bike_img\suzuki\suzuki.jpg"  width="100" hight = "70"></p>
                <table>
                        <tr>
                            <td><a href= "/SparePartsMarket/PHP/Bike/suzuki_burgman.php"><img src="\sparepartsmarket\Bike_img\suzuki\burgman\download (3).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/suzuki_gixer sf abs.php"><img src="\sparepartsmarket\Bike_img\suzuki\gixxer sf abs\suzuki-gixxer-sf-250-first1.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/suzuki_gsxr.php"><img src="\sparepartsmarket\Bike_img\suzuki\gsxr\images.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "\SparePartsMarket\PHP\Bikesuzuki_intruder.php"><img src="\sparepartsmarket\Bike_img\suzuki\intruder\download.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/suzuki_slingshot.php"><img src="\sparepartsmarket\Bike_img\suzuki\slingshot\download (2).jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\suzuki_burgman.php">burgman</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\suzuki_gixer sf abs.php">gixxer sf abs</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\suzuki_gsxr.php">suzuki gsxr</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\suzuki_intruder.php">suzuki intruder</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\suzuki_slingshot.php">suzuki slingshot</h2></td>
                            <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                        </tr>
                      </table> 
    </section>
            </div>
            <div class="yamaha" id="yamaha">
                <p><img src="\sparepartsmarket\Bike_img\yamaha\yamaha.jpeg"  width="100" hight = "70"></p>
                <table>
                    <tr>
                        <td><a href= "/SparePartsMarket/PHP/Bike/yamaha_v2.php"><img src="\sparepartsmarket\Bike_img\yamaha\fi v3\yamaha-fzsfi-new-right-side-view_360x240.webp"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/yamaha_fzs.php"><img src="\sparepartsmarket\Bike_img\yamaha\fzs\download.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/yamaha_r15.php"><img src="\sparepartsmarket\Bike_img\yamaha\R15\2018-Yamaha-R15-v3.0-Indonesia-press-Blue.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/yamaha_fzs.php"><img src="\sparepartsmarket\Bike_img\yamaha\r1m\images (1).jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/yamaha_xsr.php"><img src="\sparepartsmarket\Bike_img\yamaha\xsr 155\yamaha_xsr155_tracker_640x480.webp"  width="250" hight = "250"></a></td>
                    </tr> 
                    <tr> 
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\yamaha_v2.php">YAMAHA FI V3</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\yamaha_fzs.php">yamaha fzs</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\yamaha_r15.php">yamaha R15</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\yamaha_fzs.php">yamaha MT15</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\yamaha_xsr.php">XSR</h2></td>
                        <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                    </tr>
                      </table> 
    </section>
            <div class="tvs" id="tvs">
                <p><img src="\sparepartsmarket\Bike_img\Tvs\TVS_Motor_Company.jpg"  width="100" hight = "70"></p>
                <table >
                            <tr>
                                <td><a href= "/SparePartsMarket/PHP/Bike/tvs_4v.php"><img src="\sparepartsmarket\Bike_img\Tvs\4v\tvs-apache60488ef432a97.webp"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/tvs_radeon.php"><img src="\sparepartsmarket\Bike_img\Tvs\radeon\download (2).jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/tvs_rtr160.php"><img src="\sparepartsmarket\Bike_img\Tvs\RTR 160\rtr-160-bs6_360x240.webp"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/tvs_striker.php"><img src="\sparepartsmarket\Bike_img\Tvs\striker\TVS-Stryker-125-removebg-preview.png"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/tvs_xl100.php"><img src="\sparepartsmarket\Bike_img\Tvs\XL100\tvs-xl100-heavy-duty-i-touch-start-bs6-right-side-view_360x240.webp"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\tvs_4v.php">4v</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\tvs_radeon.php">radeon</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\tvs_rtr160.php">rtr 160</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\tvs_striker.php">tvs stryker</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\tvs_xl100.php">xl 100</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
            </div>
            <div class="kawasaki" id="kawasaki">
                <p><img src="\sparepartsmarket\Bike_img\kawsaki\kawsaki.png"  width="100" hight = "70"></p>
                <table >
                        <tr>
                            <td><a href= "#"><img src="\sparepartsmarket\Bike_img\kawsaki\new-kawasaki-z125.jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\#">kawashaki z125</h2></td>
                        </tr>
                      </table> 
    </section>
            </div>
            <div class="ktm" id="ktm">
                <p><img src="\sparepartsmarket\Bike_img\kTm\KTM-logo-1200x1085.jpg"  width="100" hight = "70"></p>
                <table >
                        <tr>
                            <td><a href= "/SparePartsMarket/PHP/Bike/ktm_duke.php"><img src="\sparepartsmarket\Bike_img\kTm\duke\images (3).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/ktm_rc.php"><img src="\sparepartsmarket\Bike_img\kTm\rc\images (4).jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/ktm_superduke.php"><img src="\sparepartsmarket\Bike_img\kTm\superduke\download.jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\ktm_duke.php">ktm duke</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\ktm_rc.php">ktm rc</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\ktm_superduke.php">ktm superduke</h2></td>
                            <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                        </tr>
                      </table> 
    </section>
            </div>
            <div class="lifan" id="lifan">
                <p><img src="\sparepartsmarket\Bike_img\Lifan\lifan.png"  width="100" hight = "70"></p>
                <table >
                    <tr>
                                <td><a href= "/SparePartsMarket/PHP/Bike/lifan_k19.php"><img src="\sparepartsmarket\Bike_img\Lifan\k19\xfvxfg-1.png"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/lifan_kp.php"><img src="\sparepartsmarket\Bike_img\Lifan\kp\download.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/lifan_kpr.php"><img src="\sparepartsmarket\Bike_img\Lifan\kpr 150\download (2).jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Bike/lifan_kpt.php"><img src="\sparepartsmarket\Bike_img\Lifan\kpt\images.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\lifan_k19.php">Lifan k19</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\lifan_kp.php">Lifan kp</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\lifan_kpr.php">Lifan kpr 15</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\lifan_kpt.php">Lifan kpt</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                      </table> 
    </section>
            </div>
            <div class="taro" id="taro">
                <p><img src="\sparepartsmarket\Bike_img\taro gp\taro.jpg"  width="100" hight = "70"></p>
                <table >
                    <tr>
                        <td><a href= "/SparePartsMarket/PHP/Bike/taro gp_1.php"><img src="\sparepartsmarket\Bike_img\tarogp\gp 1\download (2).jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/taro gp_2.php"><img src="\sparepartsmarket\Bike_img\tarogp\gp 2\download (1).jpg"  width="250" hight = "250"></a></td>
                    </tr> 
                    <tr> 
                       <td><h2 class="/SparePartsMarket/PHP/Bike/item-title"><a href= "\SparePartsMarket\PHP\Bike\taro gp_1.php">tarogp gp 1</h2></td>
                       <td><h2 class="/SparePartsMarket/PHP/Bike/item-title"><a href= "\SparePartsMarket\PHP\Bike\taro gp_2.php">tarogp gp 2</h2></td>
                        <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                    </tr>
                      </table> 
    </section>
            </div>
            <div class="keeway" id="keeway">
                <p><img src="\sparepartsmarket\Bike_img\kee way\keeway-vector-logo.png"  width="100" hight = "70"></p>
                <table >
                        <tr>
                            <td><a href= "/SparePartsMarket/PHP/Bike/k_way_RKS.php"><img src="\sparepartsmarket\Bike_img\kee way\RKS\BIKE.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/k_way_RKS125.php"><img src="\sparepartsmarket\Bike_img\kee way\RKS 125\BIKE.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/k_way_superlight125.php"><img src="\sparepartsmarket\Bike_img\kee way\SUPERLIGHT 125\BIKE.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/keeway_K_light.php"><img src="\sparepartsmarket\Bike_img\kee way\K LIGHT\BIKE.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Bike/kway_Rkr165.php"><img src="\sparepartsmarket\Bike_img\kee way\RKR 165\BIKE.jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\k_way_RKS.php">RKS</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\k_way_RKS125.php">RKS 125</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\k_way_superlight125.php">superlight125</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\keeway_K_light.php">K_light</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\kway_Rkr165.php">Rkr165</h2></td>
                            <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                        </tr>
                      </table> 
    </section>
            </div>
       <div class="beneli" id="beneli">
       <p><img src="\sparepartsmarket\Bike_img\Beneli\beneli.jpg"  width="100" hight = "70"></p>
        <table >
                <tr>
                    <td><a href= "/SparePartsMarket/PHP/Bike/beneli_165s.php"><img src="\sparepartsmarket\Bike_img\Beneli\165s\165s.jpg"  width="250" hight = "250"></a></td>
                    <td><a href= "/SparePartsMarket/PHP/Bike/beneli_k_light.php"><img src="\sparepartsmarket\Bike_img\Beneli\k light\k light.jpg"  width="250" hight = "250"></a></td>
                    <td><a href= "/SparePartsMarket/PHP/Bike/beneli_tnt150.php"><img src="\sparepartsmarket\Bike_img\Beneli\tnt 150\benelli-tnt-150.jpg"  width="250" hight = "250"></a></td>
                    <td><a href= "/SparePartsMarket/PHP/Bike/beneli_vj_125i.php"><img src="\sparepartsmarket\Bike_img\Beneli\vj 125i\VZ125i BLUE_COLORS.jpg"  width="250" hight = "250"></a></td>
                </tr> 
                <tr> 
                   <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\beneli_165s.php">165s</h2></td>
                   <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\beneli_k_light.php">k light</h2></td>
                   <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\beneli_tnt150.php">tnt 150</h2></td>
                   <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\beneli_vj_125i.php">vj 125i</h2></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="honda" id="honda">
            <p><img src="\sparepartsmarket\Bike_img\honda\honda bike logo.png"  width="100" hight = "70"></p>
            <table >
                    <tr>
                        <td><a href= "/SparePartsMarket/PHP/Bike/honda_cbr.php"><img src="\sparepartsmarket\Bike_img\honda\cbr\Cbr-150R-Deluxe-480x248.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/honda_hornet.php"><img src="\sparepartsmarket\Bike_img\honda\hornet\458ddb678e9bfbe8c2964ff8f96fa6f7.jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/honda_xblade.php"><img src="\sparepartsmarket\Bike_img\honda\x blade\download (3).jpg"  width="250" hight = "250"></a></td>
                        <td><a href= "/SparePartsMarket/PHP/Bike/honda_xmotion.php"><img src="\sparepartsmarket\Bike_img\honda\x motion\honda-cb150r-exmotion-side-view.jpg"  width="250" hight = "250"></a></td>
                    </tr> 
                    <tr> 
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\honda_cbr.php">CBR</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\honda_hornet.php">Hornet</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\honda_xblade.php">X blade</h2></td>
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\honda_xmotion.php">X motion</h2></td>
                        <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                    </tr>
                  </table> 
    </section>
        </div>
        <div class="gpx" id="gpx">
            <p><img src="\sparepartsmarket\Bike_img\Gpx\GPX.jpeg"  width="100" hight = "70"></p>
            <table >
                    <tr>
                        <td><a href= "#"><img src="\sparepartsmarket\Bike_img\Gpx\gpx-demon-gr165r.jpg"  width="250" hight = "250"></a></td>
                    </tr> 
                    <tr> 
                       <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Bike\#">GPX DEMON </h2></td>
                    </tr>
                  </table> 
    </section>
        </div>
    </section>

    <section class="car" id="car">
                <div class="audi" id="audi">
                <div class="text2"><h1>CAR'S</h1></div>
                <p><img src="\sparepartsmarket\Car_img\Audi\download.png"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Audi_A6.php"><img src="\sparepartsmarket\Car_img\Audi\A6\A184972_blog.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Audi_Q7.php"><img src="\sparepartsmarket\Car_img\Audi\Audi Q7\2020-audi-q7-ogi1.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Audi_Q3.php"><img src="\sparepartsmarket\Car_img\Audi\Q3\1920x1080-audi-q3-front-side-view-my2021-81001_1.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Audi_Q5.php"><img src="\sparepartsmarket\Car_img\Audi\Q5\2017_Audi_Q5_S_Line_TFSi_Quattro_2.0_Front.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Audi_A6.php">A6</h2></td>C:\xampp\htdocs\SparePartsMarket\PHP\Car\Audi_A6.php
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Audi_Q7.php">Q7</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Audi_Q3.php">Q3</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Audi_Q5.php">Q5</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="bmw" id="bmw">
                <p><img src="\sparepartsmarket\Car_img\Bmw\download (1).png"  width="100" hight = "70"></p>

                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Bmw_5.php"><img src="\sparepartsmarket\Car_img\Bmw\BMW 5 SERIES SEDAN\bmw-5-series-sedan-img3.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Bmw_7.php"><img src="\sparepartsmarket\Car_img\Bmw\BMW 7 SERIES SEDAN\bmw-7-series-sedan-img1.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Bmw_x5.php"><img src="\sparepartsmarket\Car_img\Bmw\BMW X5\BMW_X5-auto-sales-statistics-Europe.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Bmw_x7.php"><img src="\sparepartsmarket\Car_img\Bmw\X7\BMW-X7-M50i-2021.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Bmw_5.php">BMW 5</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Bmw_7.php">BMW 7</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Bmw_x5.php">BMW X5</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Bmw_x7.php">BMW X7</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="hondacar" id="hondacar">
                <p><img src="\sparepartsmarket\Car_img\Honda\download.png"  width="100" hight = "70"></p>

                    <table >
                            <tr>
                                
                                <td><a href= "/SparePartsMarket/PHP/Car/Honda_accord.php"><img src="\sparepartsmarket\Car_img\Honda\ACCORD\2021-honda-accord-009.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Honda_crv.php"><img src="\sparepartsmarket\Car_img\Honda\CR-V\2020-Honda-CR-V-Hybrid-Touring-AWD-28.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Honda_civic.php"><img src="\sparepartsmarket\Car_img\Honda\HONDA CIVIC\2020-honda-civic-si-coupe.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Honda_vezel.php"><img src="\sparepartsmarket\Car_img\Honda\VEZEL\honda-vezel_085H.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Honda_accord.php">HONDA ACCORD</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Honda_crv.php">CR V</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Honda_civic.php">CIVIC </h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Honda_vezel.php">VEZEL</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="hyundai" id="hyundai">
                <p><img src="\sparepartsmarket\Car_img\Hyundai\download (1).png"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Hyundai_elantra.php"><img src="\sparepartsmarket\Car_img\Hyundai\ELANTRA\2021-hyundai-elantra-sel-1.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Hyundai_accent.php"><img src="\sparepartsmarket\Car_img\Hyundai\HYUNDAI ACCENT\accent-hc-highlights-left-side-front-view-silver-m.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Hyundai_ioniq.php"><img src="\sparepartsmarket\Car_img\Hyundai\IONIQ\hyundai-ioniq-driving-720x405px.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Hyundai_kona.php"><img src="\sparepartsmarket\Car_img\Hyundai\KONA\2021-hyundai-kona_100755129_l.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Hyundai_elantra.php">ELANTRA</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Hyundai_accent.php">HYUNDAI ACCENT</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Hyundai_ioniq.php">IONIQ</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Hyundai_kona.php">KONA</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="mercedes" id="mercedes">
                <p><img src="\sparepartsmarket\Car_img\Mercedes Benz\download.png"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Mercedes_amg.php"><img src="\sparepartsmarket\Car_img\Mercedes Benz\AMG\2019-MB-GT-4-Door-Coupe-exterior-front-fascia-and-driver-side-in-empty-lot_o-1038x375.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mercedes_cls.php"><img src="\sparepartsmarket\Car_img\Mercedes Benz\CLS\Mercedes-CLS-front-quarter-front-8192-default-large.jpeg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mercedes_gls.php"><img src="\sparepartsmarket\Car_img\Mercedes Benz\GLS\2020_Mercedes-Benz_GLS_450,_front_1.20.20.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mercedes_eclass.php"><img src="\sparepartsmarket\Car_img\Mercedes Benz\MERCEDEZ BENZ E CLASS\2021-e-class-ogi.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mercedes_amg.php">AMG</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mercedes_cls.php">CLS</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mercedes_gls.php">GLS</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mercedes_eclass.php">E CLASS</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="mitasubusi" id="mitasubusi">
                <p><img src="\sparepartsmarket\Car_img\Mitsubishi\download (1).png"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Mitsubishi_expander.php"><img src="\sparepartsmarket\Car_img\Mitsubishi\EXPANDER\mitsubish-xpander-img1.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mitsubishi_lancer.php"><img src="\sparepartsmarket\Car_img\Mitsubishi\mitsubishi lancer\university-mitsubishi-lancer-evo-viii-1024x469.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mitsubishi_outlander.php"><img src="\sparepartsmarket\Car_img\Mitsubishi\OUTLANDER\61CUlR955SL._UY560_.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Mitsubishi_pajero.php"><img src="\sparepartsmarket\Car_img\Mitsubishi\PAJERO\Mitsubishi-Pajero-Sport-Car-Price-Specifications-Bangladesh.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mitsubishi_expander.php">EXPANDER</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mitsubishi_lancer.php">mitsubishi lancer</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mitsubishi_outlander.php">OUTLANDER</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Mitsubishi_pajero.php">PAJERO</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="nissan" id="nissian">
                <p><img src="\sparepartsmarket\Car_img\Nissan\download.jpg"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Nissan_armada.php"><img src="\sparepartsmarket\Car_img\Nissan\nissan armada\Nissan_Armada_SL_4x2_2021.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Nissan_rogue.php"><img src="\sparepartsmarket\Car_img\Nissan\ROGUE\Nissan-Rogue-S-2021.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Nissan_sentra.php"><img src="\sparepartsmarket\Car_img\Nissan\SENTRA\2020-nissan-sentra-101-1576464321.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Nissan_xtrail.php"><img src="\sparepartsmarket\Car_img\Nissan\X-TRAIL\nissan-x-trail-la-versione-per-la-cina.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Nissan_armada.php">nissan armada</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Nissan_rogue.php">ROGUE</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Nissan_sentra.php">SENTRA</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Nissan_xtrail.php">X-TRAIL</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="rangerover" id="rangerover">
                <p><img src="\sparepartsmarket\Car_img\Range rover\download.png"  width="100" hight = "70"></p>
                    <table >
                        <tr>
                        
                            <td><a href= "/SparePartsMarket/PHP/Car/Rangerover_evoque.php"><img src="\sparepartsmarket\Car_img\Range rover\RANGE ROVER EVOQUE\2020-land-rover-range-rover-evoque-ogi-1.jpg"  width="250" hight = "250"></a></td>
                            <td><a href= "/SparePartsMarket/PHP/Car/Rangerover_sport.php"><img src="\sparepartsmarket\Car_img\Range rover\RANGE ROVER SPORT\jlr-unveils-petrol-variant-of-range-rover-sport-at-rs-86-71-lakh.jpg"  width="250" hight = "250"></a></td>
                        </tr> 
                        <tr> 
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Rangerover_evoque.php">RANGE ROVER EVOQUE</h2></td>
                           <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Rangerover_sport.php">RANGE ROVER SPORT</h2></td>
                            <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                        </tr>
                          </table> 
    </section>
                </div>
                <div class="suzukicar" id="suzukicar">
                <p><img src="\sparepartsmarket\Car_img\Suzuki\download (1).png"  width="100" hight = "70"></p>
                    <table >
                            <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Suzuki_ertiga.php"><img src="\sparepartsmarket\Car_img\Suzuki\suzuki ertiga\3471fd862bb4462d935a0504517a217b.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Suzuki_vitara.php"><img src="\sparepartsmarket\Car_img\Suzuki\suzuki VITARA\small-5070-vitarahybrid.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Suzuki_ertiga.php">suzuki ertiga</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Suzuki_vitara.php">suzuki VITARA</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
                <div class="toyota" id="toyota">
                <p><img src="\sparepartsmarket\Car_img\toyota\download.png"  width="100" hight = "70"></p>
                    <table >
                    <tr>
                            
                                <td><a href= "/SparePartsMarket/PHP/Car/Toyota_allion.php"><img src="\sparepartsmarket\Car_img\toyota\ALLION\allion_w1920_01.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Toyota_axio.php"><img src="\sparepartsmarket\Car_img\toyota\AXIO\crla1503_05_s.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Toyota_gt86.php"><img src="\sparepartsmarket\Car_img\toyota\GT 86\2021-toyota-gr86-render.jpg"  width="250" hight = "250"></a></td>
                                <td><a href= "/SparePartsMarket/PHP/Car/Toyota_premio.php"><img src="\sparepartsmarket\Car_img\toyota\TOYOTA PREMIO\Toyota_PREMIO_1.5F_L_Package.jpg"  width="250" hight = "250"></a></td>
                            </tr> 
                            <tr> 
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Toyota_allion.php">allion</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Toyota_axio.php">AXIO</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Toyota_gt86.php">GT 86</h2></td>
                               <td><h2 class="item-title"><a href= "\SparePartsMarket\PHP\Car\Toyota_premio.php">TOYOTA PREMIO</h2></td>
                                <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                            </tr>
                          </table> 
    </section>
                </div>
    </section>

    <section class="enginoill" id="enginoill">
    <div class="text3"><h1>ENGIN OILL'S</h1></div>
    <div class="castrol" id="castrol">
        <table>
        <p><img src="\sparepartsmarket\EnginOil_img\Castrol Active\download.jpg"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\41Qp6QD4EtS.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\60a1e5b2ef9ed_1621222834.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\97-500x500.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\7100CQZYNcL._SL1200_.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\castrol-activ-20w50-4t-500x500.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Castrol Active\seat-cover-500x500.jpg"   width="250" hight = "250"></a></td>
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">10w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w30</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="shell" id="shell">
        <table >
        <p><img src="\sparepartsmarket\EnginOil_img\shellAdvance\shell-advance.png"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\shellAdvance\10w-40-shell-advance-fully-synthetic-engine-oil-500x500.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\shellAdvance\0339486_shell-advance-fuel-save-10w-30-fully-synthetic-engine-oil.jpeg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\shellAdvance\H42bd3f4fe0204322866682e60c88c77fT.jpg"   width="250" hight = "250"></a></td>
                   
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\shellAdvance\shell-advance-20w-40-engine-oil-500x500.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\shellAdvance\uga-shell-advance-ax5-4t.jpeg"   width="250" hight = "250"></a></td>
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">10w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w30</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="havoline" id="havoline">
        <table >
        <p><img src="\sparepartsmarket\EnginOil_img\Havoline\download.png"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Havoline\7e8209feacc7-1.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Havoline\261291.png"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Havoline\b51cb8468e74fff7872b1db66eab509e.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Havoline\Caltex-Havoline-Motor-Oil-Gas-20W-50-Engine-Oil-4Ltr-Mineral-LoyalParts.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Havoline\Caltex-Havoline-Engine-Oil-10w-30.jpg"   width="250" hight = "250"></a></td>
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">20w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">5w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w30</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="liqui" id="liqui">
        <table >
        <p><img src="\sparepartsmarket\EnginOil_img\Liquimoly\Liqui-Moly-Logo.png"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Liquimoly\61HEbsNFujL._SL1000_.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Liquimoly\81bYZYyegfL._SL1500_.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Liquimoly\1502_1570460285718_ctx-1.jpg"  width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Liquimoly\2555.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Liquimoly\liqui-moly-4t-10w-40-motorcycle-engine-oil-500x500.jpg"  width="250" hight = "250"></a></td>
                    
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w30</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="mobil" id="mobil">
        <table >
        <p><img src="\sparepartsmarket\EnginOil_img\Mobil\1200px-Mobil-logo.svg.png"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Mobil\2-1l-mobil-super-moto-4t-20w50-5mail-fs-square-md.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Mobil\8124h6l1A6L._SY450_.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Mobil\mobil-super-moto-20w-40-4t-fs-square-md.jpg"   width="250" hight = "250"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Mobil\super-moto-engine-oil-500x500.jpg"   width="250" hight = "250"></a></td>
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button>></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w30</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
       <div class="motul" id="motul">
        <table >
        <p><img src="\sparepartsmarket\EnginOil_img\Motul\Motul-logo.jpg"  width="100" hight = "70"></p>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\15-155642_transparent-motul-png-motul-engine-oil-10w40-png-1.png"   width="200" hight = "200"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\81PBBCoCYML._SY879_.jpg"   width="200" hight = "200"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\3000-4t-plus-20w40-motul-engine-oil-500x500.jpg"   width="200" hight = "200"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\b41_104125-1.jpg"   width="200" hight = "200"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\motul-motorenoel-engine-oil-1 (1).jpg"  width="200" hight = "200"></a></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\EnginOil_img\Motul\motul-motorenoel-engine-oil-1.jpg"   width="200" hight = "200"></a></td>
                </tr> 
                <tr> 
                    <td> <h2 class="item-title">10w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w40</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">15w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">20w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    <td> <h2 class="item-title">10w50</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></td>
                    
                    <tr><td><h3><a href = "#">Back to Top</a></h3></td></tr>
                </tr>
                </table> 
    </section>
       </div>
    </section>
    <footer class="footer" id="contact">
    <div class="column right">
                    <div class="text">Message us</div>
                    <form action="#" class="form">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
        <p> 
                <h1>SPARE PARTS MARKET</h1>
                <h3>ADDRESS: MOTIJIL DHAKA</h3>
                <h3>EMAIL:SPAREPARTSMARKET@GMAIL.COM</h3>
                <h3>PHONENUMBER:0123324809230</h3>
                <h3>CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                <h3>BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
        </p>
            <h3 class="website"><a href="main.php">www.sparepartsmarket.com</a></h3>
    </footer>

       <script src="sticky.js"></script>
</body>
</html>