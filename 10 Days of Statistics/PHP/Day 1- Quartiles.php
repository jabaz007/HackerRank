<?php

function quartiles($arr) {
	// Write your code here
	sort($arr);

	$n = count($arr);
	$ln = floor($n / 2);

	$f = floor($ln / 2);
	if ($ln > 1 && $ln % 2 == 0) {
		$first = ($arr[$f - 1] + $arr[$f]) / 2;
	} else {
		$first = $arr[$f];
	}

	$s = floor($n / 2);
	if ($n % 2 == 0) {
		$second = ($arr[$s - 1] + $arr[$s]) / 2;
	} else {
		$second = $arr[$s];
	}

	$l = $ln + floor($ln / 2) + ($n % 2 == 0 ? 0 : 1);
	if ($ln > 1 && $ln % 2 == 0) {
		$last = ($arr[$l - 1] + $arr[$l]) / 2;
	} else {
		$last = $arr[$l];
	}

	return array($first, $second, $last);
}
