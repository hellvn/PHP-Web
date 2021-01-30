<?php
$date1=date_create("2021-01-29");
$date2=date_create("2021-02-11");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");