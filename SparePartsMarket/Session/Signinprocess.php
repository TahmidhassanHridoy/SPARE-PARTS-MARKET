<?php
    if(session_status() >= 0){
        if(isset($_SESSION["uname"])){
            header("refresh: 0.5; url = \SparePartsMarket\View\privatemain.php" );
        }
    }
if(isset($_POST["submit"])){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $conn  = mysqli_connect('localhost' , 'root', '' ,'app_users');
    $sql = "SELECT *FROM userdetail WHERE username = '$uname' and  password = '$pass'";

    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);

    if($count == 1){
        session_start();
        $_SESSION["uname"] = $uname;
        echo'<script>alert("Click ok for browsing")</script>';
        echo"Please wait it will take some sec";
        header("refresh: 2; url = \SparePartsMarket\View\privatemain.php");
        exit();
    }else{
        echo'<script>alert("Fill the username or password")</script>';
        echo"Please wait it will take some sec";
        header("refresh: 2; url = \SparePartsMarket\View\main.php");
        exit();
    }
}
if(isset($_POST["submit"])){
    echo '<script>alert("Invalid username or password")</script>';
    echo"Please wait it will take some sec";
    header("refresh: 2; url = \SparePartsMarket\View\main.php");
}

?>