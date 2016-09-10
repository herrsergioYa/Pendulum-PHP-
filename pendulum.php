<?php
	
	require_once "forces.php";

	list($b, $w, $sin) = array(0.05, 1.0, true);
	list($x, $v, $f, $fw, $fa) = array(1.5, 0.00, "cst", $w, 0.7);
	list($t, $N, $M) = array(120, 1200, 10000);
	
	$N *= $M;
	$t /= $N;
	
	$b += $b;
	$W = $w *$w;
	
	echo "t|x(t)|v(t)|a(t)|f(t)\n";
	
	for($i = 0; $i <= $N; $i++)
	{
		$T = $t * $i;
		
		$ff = $f($T, $x, $v, $w, $b, $fw, $fa);
		
		if($sin)
			$a = - ($b * $v + $W * sin($x)) + $ff;
		else
			$a = - ($b * $v + $W * $x) + $ff;
		
		if($i % $M == 0) {
			echo "$T|$x|$v|$a|$ff\n";
		}
		
		$x += $v * $t;
		$v += $a * $t;
	}
	

	
	
