<?php

 if(isset($_POST["submit"])){
    if($_POST["pass"] == $_POST["cpass"]){
        $uname = filter_var($_POST["uname"] , FILTER_SANITIZE_EMAIL);
        if(filter_var($uname , FILTER_SANITIZE_EMAIL)){
            $fname = $_POST["fname"];
            $mname = $_POST["mname"];
            $lname = $_POST["lname"];
            $birthday = $_POST["birthday"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $sname = $_POST["sname"];
            $slocation = $_POST["slocation"];
            $pass  = $_POST["pass"];
            $conn  = mysqli_connect('localhost' , 'root' , '' , 'app_users' );
            $sql = "INSERT INTO sellerdetail(fname , mname , lname , birthday , email , phone ,shopname , shoplocation ,username , password) VALUES('$fname',' $mname','$lname','$birthday','$email','$phone','$sname','$slocation','$uname','$pass')";
            if(mysqli_query($conn , $sql)){
                session_start();
                $_SESSION["email"] = $_POST["email"];
                echo '<script>alert("Registration complate please wait")</script>';
                header("refresh:4 ;url = \SparePartsMarket\View\sellerpage.php");
            }
        }else{
            echo '<script>alert("Email format is not correct")</script>' ;
            header("refresh:2 ; url = \SparePartsMarket\View\sellerreg.php");
        }
    }else{
        echo '<script>alert("Password and Confirm password is not same")</script>';
        header("refresh:2 ; url = \SparePartsMarket\View\sellerreg.php");
    }
}else{
    if(session_status() == PHP_SESSION_NONE){}
    header("location: \SparePartsMarket\View\sellerlogin.php");
}
?>