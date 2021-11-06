<?php

$presentTime = new  DateTime('TODAY');
$destinationTime = new DateTime('1955-11-12 04:29:00');

echo 'Present time is ' . $presentTime->format('M d Y h:i:s') . '.<br>', PHP_EOL;
echo 'Destination time is ' . $destinationTime->format('M d Y h:i:s') . '.<br>', PHP_EOL;

$interval = $presentTime->diff($destinationTime);
echo 'Time to your jet lag ', $interval->format(" %Y years %M months %D days %H hours %I minutes %S seconds"), '.<br>', PHP_EOL;

