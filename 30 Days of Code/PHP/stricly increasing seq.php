<?php

function solution($sequence) {
	$count = 0;
	$index = -1;
	$n = count($sequence);

	$i = 1;
	for ($i; $i < $n; $i++) {
		if ($sequence[$i - 1] >= $sequence[$i]) {
			$count++;
			$index = $i;
		}
	}

	if ($count > 1) {
		return false;
	}

	if ($count == 0) {
		return true;
	}

	if ($index == $n - 1 || $index == 1) {
		return true;
	}

	if ($sequence[$index - 1] < $sequence[$index + 1]) {
		return true;
	}

	if ($sequence[$index - 2] < $sequence[$index]) {
		return true;
	};

	return false;
}
