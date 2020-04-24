<?php
/***
Letter Changes:
Have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm. Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string.

5 = TEST CASE POINTS (All the test case outputs were correct)
5 = TIME PERIOD POINTS (This user submitted their solution in 3 minutes)
10 = TOTAL POINTS
***/

function LetterChanges($str) {  

  // code goes here:
  /*
  Using the PHP language, have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm.
  Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a).
  Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string.
  hello*3	-> Ifmmp*3 */
  
  $arr_alphabet = ['A', 'b', 'c', 'd', 'E', 'f', 'g', 'h', 'I', 'j', 'k', 'l', 'm', 'n', 'O', 'p', 'q', 'r', 's', 't', 'U', 'v', 'w', 'x', 'y', 'z']; //// $arr_alphabet[0] = A;
  $arr_str = str_split($str); //// $arr_str[0] = h;
  $str_after = '';
  
  for ($x = 0; $x < count($arr_str); $x++)
  {
	$key = array_search(strtolower($arr_str[$x]), array_map('strtolower', $arr_alphabet)); //// $key = array_search(h, $arr_alphabet); $key = 7;
	
	if ($key === false ) { //// unmatched
		$str_after .= $arr_str[$x];
	} elseif ($key === 25 ) { //// z
		$str_after .= $arr_alphabet[0];
	} else {
		$str_after .= $arr_alphabet[$key + 1]; //// matched: $str_after = $arr_alphabet[8]; $str_afterr = I;
	}
  }
  
  return $str_after; 
         
}
   
// keep this function call here  
echo LetterChanges(fgets(fopen('php://stdin', 'r')));  
