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
            $pass  = $_POST["pass"];
            $conn  = mysqli_connect('localhost' , 'root' , '' , 'app_users' );
            $sql = "INSERT INTO userdetail(fname , mname , lname , birthday , email , phone , username , password) VALUES('$fname',' $mname','$lname','$birthday','$email','$phone','$uname','$pass')";
            if(mysqli_query($conn , $sql)){
                session_start();
                $_SESSION["email"] = $_POST["email"];
                echo '<script>alert("Registration complate please wait")</script>';
                echo "please wait page is loading";
                header("refresh:4 ;url = main.php");
            }
        }else{
            echo '<script>alert("Email format is not correct")</script>' ;
            echo "redirected";
            header("refresh:2 ; url = Signup.php");
        }
    }else{
        echo '<script>alert("Password and Confirm password is not same")</script>';
        echo "redirected";
        header("refresh:2 ; url = Signup.php");
    }
}else{
    if(session_status() == PHP_SESSION_NONE){}
    echo "redirected";
    header("location: main.php");
}
?>