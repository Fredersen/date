<?php

$presentTime = new DateTime;

echo 'Present Time : ' . $presentTime->format('M d Y A h i') . '<br/>' ;

$destinationTime = (new DateTime)->setDate(2123,11,16)->setTime(11, 15, 00);

$timeUntilDestination = $presentTime->diff($destinationTime);

echo 'Interval : ' . $timeUntilDestination->format('%y years %m months %d days %h hours %m minutes') . '<br/>' ;

echo 'Destination Time : ' . $destinationTime->format('M d Y A h i') . '<br/>' ;