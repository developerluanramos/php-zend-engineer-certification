<?php 

$pi = 3.14159625;
$indiana = 3.2;
$epsilon = 0.00001;

if(abs($pi - $indiana) < $epsilon) {
	echo "Those values look the same to me";
} else {
	echo "Those values are different";
}
