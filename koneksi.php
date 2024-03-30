<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'dbfachrezi';

    $conn = mysqli_connect($host, $user, $pass, $dbname)or die(mysqli_error($conn));
?>