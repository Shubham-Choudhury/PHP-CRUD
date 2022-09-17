<?php
    include 'conn.php';

    $id = $_GET['id'];

    $q = "delete from user_data where id=$id";

    mysqli_query($con, $q);

    header('location: index.php');
?>