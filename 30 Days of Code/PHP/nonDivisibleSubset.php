<?php

function nonDivisibleSubset($k, $s) {
	// Write your code here
	$n = sizeOf($s);
	$f = array_fill(0, $k, NULL);

	for ($i = 0; $i < $n; $i++)
		$f[$s[$i] % $k]++;

	if ($k % 2 == 0)
		$f[$k / 2] = min($f[$k / 2], 1);

	$res = min($f[0], 1);

	for ($i = 1; $i <= $k / 2; $i++)
		$res += max($f[$i], $f[$k - $i]);

	return $res;
}
