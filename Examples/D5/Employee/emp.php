<?php
require 'employee.php';
$emp1 = new employee(1,"David","England");
$emp2 = new employee(2, "Jack", "China");
$emp3 = new employee(3, "Vuong", "Viet Nam");
echo "Employee no: ".$emp1->getManNo()." <br>Employee name: ".$emp1->getName()."<br>Position: ".$emp1->getPosition();
echo "<br><br> Employee no: ".$emp2->getManNo()." <br>Employee name: ".$emp2->getName()."<br>Position: ".$emp2->getPosition();
echo "<br><br> Employee no: ".$emp3->getManNo()." <br>Employee name: ".$emp3->getName()."<br>Position: ".$emp3->getPosition();