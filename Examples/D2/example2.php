<?php
$money = 500;
$bank_ballance = 1000;
$savings = 50;
if($bank_ballance < 100){
    $money = 1000;
    $bank_ballance += $money;
}
elseif ($bank_ballance > 200){
    $savings += 100;
    $bank_ballance -= 100;
}
else{
    $savings += 50;
    $bank_ballance -= 50;
}
echo "money = ".$money. "<br>bank ballance = ".$bank_ballance. "<br>savings = ".$savings;
