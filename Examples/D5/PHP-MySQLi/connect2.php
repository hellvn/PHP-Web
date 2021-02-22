<?php
    require_once 'login.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully<br>";