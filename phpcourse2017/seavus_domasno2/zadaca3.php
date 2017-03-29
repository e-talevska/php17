<?php
$fib = array(0, 1);
$n = 1;
while(true) {
	$n++;
	$fib[$n] = $fib[$n-1] + $fib[$n-2];
	if($fib[$n] > 1000) {
		unset($fib[$n]);
		break;
	}
}

echo implode(' , ', $fib);