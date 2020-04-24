<?php
/***
First Factorial:
Have the function FirstFactorial(num) take the num parameter being passed and return the factorial of it. For example: if num = 4, then your program should return (4 * 3 * 2 * 1) = 24. For the test cases, the range will be between 1 and 18 and the input will always be an integer.

5 = TEST CASE POINTS (All the test case outputs were correct)
5 = TIME PERIOD POINTS (This user submitted their solution in 1 minutes)
10 = TOTAL POINTS
***/

function FirstFactorial($num) {  

  // code goes here
  for ($x = $num - 1; $x >= 1; $x--) {
      $num *= $x;
   }
  return $num; 
         
}
   
// keep this function call here  
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));
