<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('2032/02/09 22:06:42');

echo $presentTime->format('M d Y A H:i');
echo '<br>';
echo $destinationTime->format('M d Y A H:i');
echo '<br>';
$interval = $presentTime->diff($destinationTime);
echo '<br>';

echo $interval->format('%Y') . ' year(s) ' . $interval->format('%M') . ' month(s) ' . $interval->format('%D');
echo ' day(s) ' . $interval->format('%H') . ' hour(s) ' . $interval->format('%I') . ' minute(s)';
