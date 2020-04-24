<?php 
/***
First Reverse:
Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order. For example: if the input string is "Hello World and Coders" then your program should return the string sredoC dna dlroW olleH.

5 = TEST CASE POINTS (All the test case outputs were correct)
5 = TIME PERIOD POINTS (This user submitted their solution in 3 minutes)
10 = TOTAL POINTS
***/

function FirstReverse($str) {  

  // code goes here
  $str = strrev($str);
  return $str; 
         
}
   
// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));
