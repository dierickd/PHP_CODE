<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('2025/04/18 13:11:42');

echo $presentTime->format('M d Y A H:i');
echo '<br>';
echo $destinationTime->format('M d Y A H:i');
echo '<br>';
$interval = $presentTime->diff($destinationTime);
echo '<br>';

echo $interval->format('%Y') . ' year(s) ' . $interval->format('%M') . ' month(s) ' . $interval->format('%D');
echo ' day(s) ' . $interval->format('%H') . ' hour(s) ' . $interval->format('%I') . ' minute(s)';

echo '<br><br>La quantité necessaire est d\'environ 0.2% pour 1 an de voyage dans le temps<br><br>';

if ($interval->format('%a') * 0.02 > 100) {
   echo '<b>Impossible d\'effectuer ce voyage temporel, tu n\'a pas suffisamment de carburant !<b>';
} else {
   echo 'tu as besoin de ' . $interval->format('%a') * 0.02 . '% de carburant';
}
