<?php

$sum = 0;

for($i = 1; $i < 1001; $i+=2) {
	echo $i . ' ';
	$sum = $sum + $i;

}
echo '<br> The grand toal is '. $sum;
?>
