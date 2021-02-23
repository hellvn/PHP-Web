<?php
$id = "";
$url = "";
$name = "";
$small = "";
$medium = "";
$lage = "";

$id = test_input($_POST["id"]);
$url = test_input($_POST["url"]);
$name = test_input($_POST["name"]);
$small = test_input($_POST["small"]);
$medium = test_input($_POST["medium"]);
$lage = test_input($_POST["lage"]);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
require_once "login.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)die($conn->connect_error);

$query = "INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('$id', '$url', '$name', $small, $medium, $lage);";
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$query = "SELECT*FROM menu";
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