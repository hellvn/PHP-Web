<?php
require 'Student.php';
$student = new Student('HMTH2003009', 'Vuong');
echo '<b>Student Details:</b><br>';
echo 'Student ID: '.$student->getId().'<br>Student Name: '.$student->getName();
