<?php 
class Solution {
	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer[]
	 */
	function searchRange($nums, $target) {
	  $targets = [];
	  foreach($nums as $key=>$num){
		if($target === $num){
		  array_push($targets, $key);
		}
	  }
	  $first = isset($targets[0]) ? $targets[0] : -1;
	  $last =  isset($targets[count($targets) - 1]) ? $targets[count($targets) - 1] : -1;

	  return [$first, $last];
	}
}

$class = new Solution;
$class->searchRange([1], 1);

