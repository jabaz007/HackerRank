<?php

class Solution {
	protected $perms = array();
	protected $out = array();

	function pc_permute($items, $perms = array()) {
		if (empty($items)) {
			array_push($this->perms, join('', $perms));
		} else {
			for ($i = count($items) - 1; $i >= 0; --$i) {
				$newitems = $items;
				$newperms = $perms;
				list($foo) = array_splice($newitems, $i, 1);
				array_unshift($newperms, $foo);
				$this->pc_permute($newitems, $newperms);
			}
		}
	}

	function findSubstring($s, $words) {
		$this->pc_permute($words);

		$matches = array();

		foreach ($this->perms as $perm) {
			$re = "/" . $perm . "/i";
			preg_match_all($re, $s, $matches, PREG_OFFSET_CAPTURE);

			foreach ($matches as $match) {
				if (isset($match[0][1])) {
					array_push($this->out, $match[0][1]);
				}
			}
		}

		return $this->out;
	}
}

$solv = new Solution();
$solv->findSubstring("barfoothefoobarman", ["foo", "bar"]);
