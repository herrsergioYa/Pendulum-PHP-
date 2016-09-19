<?php
	
	require_once "forces.php";
	require_once "rets.php";
        require_once "params.php";
	
	$N *= $M;
	$t /= $N;
	
	$b += $b;
	$W = $w *$w;
	
	echo "t;x(t);v(t);a(t);f(t)\n";
	
	for($i = 0; $i <= $N; $i++)
	{
		$T = $t * $i;
		
		$ff = $f($T, $x, $v, $w, $b, $fw, $fa);
		
		$a = - ($b * $v + $W * $ret($x)) + $ff;
		
		if($i % $M == 0) {
			echo "$T;$x;$v;$a;$ff\n";
		}
		
		$x += $v * $t;
		$v += $a * $t;
	}
	
	
	
	
