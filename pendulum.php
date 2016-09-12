<?php
	
	require_once "forces.php";
	require_once "rets.php";

	list($b, $w, $ret) = array(1.5, 1.0, "sinfi");
	list($x, $v, $f, $fw, $fa) = array(-1.0, 1.11, "zero", $w, 0.0);
	list($t, $N, $M) = array(3.0/$b, 3000, 1000);
	
	$N *= $M;
	$t /= $N;
	
	$b += $b;
	$W = $w *$w;
	
	echo "t|x(t)|v(t)|a(t)|f(t)\n";
	
	for($i = 0; $i <= $N; $i++)
	{
		$T = $t * $i;
		
		$ff = $f($T, $x, $v, $w, $b, $fw, $fa);
		
		$a = - ($b * $v + $W * $ret($x)) + $ff;
		
		if($i % $M == 0) {
			echo "$T|$x|$v|$a|$ff\n";
		}
		
		$x += $v * $t;
		$v += $a * $t;
	}
	
	
	
	
