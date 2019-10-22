<?php
class Solution {
	public $mapElement = [
		  2 => ["a", "b", "c"],
		  3 => ["d", "e", "f"],
		  4 => ["g", "h", "i"],
		  5 => ["j", "k", "l"],
		  6 => ["m", "n", "o"],
		  7 => ["p", "q", "r", "s"],
		  8 => ["t", "u", "v"],
		  9 => ["w", "x", "y", "z"]
	  ];

	function letterCombinations($digits) 
	{
	  if(empty($digits)){
		return [];
	  }
	  $letters = $this->mapElement[substr($digits, 0, 1)];
	  $digits = substr($digits, 1);
	  if(!empty($digits)){
		$result = $this->letterCombinations($digits);
		foreach($letters as $letter){
		  foreach($result as $newLetter){
			$final[] = $letter . $newLetter;
		  }
		}
		return $final;
	  } 
		return $letters;
	}


}

$class = new Solution;
var_dump($class->letterCombinations("23"));