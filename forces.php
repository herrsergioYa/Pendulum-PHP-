<?php

	function rectangle($t, $x, $v, $w, $b, $w, $a) {
		$v = sin($t * $w);
		if($v > 0.0)
			return +$a;
		elseif($v < 0.0)
			return -$a;
		else
			return 0.0;
	}

    function sinf($t, $x, $v, $w, $b, $w, $a) {
		return $a * sin($t * $w);
	}
	
	function cst($t, $x, $v, $w, $b, $w, $a) {
		return $a;
	}
	
	function zero($t, $x, $v, $w, $b, $w, $a) {
		return 0.0;
	}