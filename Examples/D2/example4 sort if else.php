<?php
$fuel = 1;
echo $fuel <=1 ? "fill tank now":"There's enough fuel";
echo "<br>";
$enough = $fuel <=1 ? false:true;
echo $fuel."<br>";

echo $enough ? "ok":"not ok", "<br>";


if ($enough){
    echo "ok";
}else{
    echo "not ok";
}