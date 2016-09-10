<?php

	list($b, $w) = array(0.1*0, 1);
	list($x, $v) = array(3.13, 0.00);
	list($t, $N, $M) = array(250, 2500, 20000);
	
	$N *= $M;
	$t /= $N;
	
	$b += $b;
	$w *= $w;
	
	for($i = 0; $i <= $N; $i++)
	{
		$a = - ($b * $v + $w * sin($x));
		
		if($i % $M == 0) {
			$T = $t * $i;
			echo "$T|$x|$v|$a\n";
		}
		
		$x += $v * $t;
		$v += $a * $t;;
	}
	
	
