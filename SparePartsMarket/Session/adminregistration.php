<?php
if(session_status() >= 0){
    if(isset($_SESSION["username"])){
        header("refresh: 0.5; url = \SparePartsMarket\View\adminsignup.html" );
    }
}
$connection = mysqli_connect('localhost','root','','app_users');
if(isset($_POST['username'])){
         $username = $_POST['username'];
         $pass = $_POST['pass'];
         $sql = "INSERT INTO devdata(username , password) Value('$username','$pass')";
         mysqli_query($connection, $sql);
}
?> 