<?php
    $connection = mysqli_connect('localhost','root','','app_users');
    $sql = "SELECT * FROM productdetail";
    $result = mysqli_query($connection , $sql);

    $identifier = mysqli_fetch_all($result , MYSQLI_ASSOC);
    echo json_encode($identifier);
?>