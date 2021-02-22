<?php
require 'Animal.php';
require 'Cow.php';
require 'Lion.php';
$cow = new Cow("Dong vat an co", "Co");
$lion = new Lion("Dong vat an thit", "Thit");

echo "Cow: <br> la ".$cow->getFamily()." thuc an la ".$cow->getFood()."<br>";
echo "Lion: <br> la ".$lion->getFamily()." thuc an la ".$lion->getFood()."<br>";