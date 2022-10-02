<?php

$connection = mysqli_connect('localhost','root','','app_users');

if(isset($_POST['productname'])){
    $pname = $_POST['productname'];
    $price = $_POST['price'];
    $sql = "INSERT INTO productdetail(productname , price) Value('$pname','$price')";
    mysqli_query($connection, $sql);
 }
 echo'<script>alert("Insert complated")</script>';

?> 