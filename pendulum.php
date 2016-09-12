<?php
	
	require_once "forces.php";

	list($theta, $max) = array(1.0, 3.0);
	list($b, $w, $sin) = array(0.005, 1.0, true);
	list($x, $v, $f, $fw, $fa) = array($theta *$max, $w * $theta * sqrt(1.0 - $theta * $theta), "zero", $w, 0.0);
	list($t, $N, $M) = array(30, 3000, 1000);
	
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
	

	
	
