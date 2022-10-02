<?php
    if(session_status() >= 0){
        if(isset($_SESSION["username"])){
            header("refresh: 0.5; url = /SparepartsMarket/View/adminpage.php" );
        }
    }
if(isset($_POST["submit"])){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $conn  = mysqli_connect('localhost' , 'root', '' ,'app_users');
    $sql = "SELECT *FROM devdata WHERE username = '$uname' and  password = '$pass'";

    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);

    if($count == 1){
        session_start();
        $_SESSION["username"] = $uname;
        echo'<script>alert("Do you agreed to browse")</script>';
        echo "please wait page is loading";
        header("refresh: 2; url = \SparePartsMarket\View\adminpage.php");
        exit();
    }else{
        echo'<script>alert("User not found")</script>';
        echo "Redirected to login page";
        header("refresh: 2; url = /SparepartsMarket/View/adminlogin.php");
        exit();
    }
}
?>