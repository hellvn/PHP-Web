<?php
require_once 'login.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)die($conn->connect_error);

$query = "SELECT * FROM menu";
$result = $conn->query($query);
if (!$result)die($conn->error);

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j){
    $result->data_seek($j);
    echo 'ID: '.$result->fetch_assoc()['id'].'<br>';
    $result->data_seek($j);
    echo '<img src="'.$result->fetch_assoc()['img'].'"><br>';
    $result->data_seek($j);
    echo 'Name: <b>'.$result->fetch_assoc()['name'].'</b><br>';
    $result->data_seek($j);
    echo 'Tall: <b>$'.$result->fetch_assoc()['sizeX'].'</b><br>';
    $result->data_seek($j);
    echo 'Grande: <b>$'.$result->fetch_assoc()['sizeM'].'</b><br>';
    $result->data_seek($j);
    echo 'Venti: <b>$'.$result->fetch_assoc()['sizeL'].'</b><br><br>';
}

$result->close();
$conn->close();
