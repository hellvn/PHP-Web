<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully<br>";

$sql = "CREATE TABLE book(
        author VARCHAR(128),
        title VARCHAR(128),
        type VARCHAR(16),
        year CHAR(4),
        isbn CHAR(13) PRIMARY KEY )";
if ($conn->query($sql) === true){
    echo "Table created";
}else{
    echo "Error creating database: ".$conn->error;
}

$conn->close();