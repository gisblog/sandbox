<?php
# # # test.
/*
 * Complete the 'oddNumbers' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER l
 *  2. INTEGER r
 */
function oddNumbers($l, $r) {
	// Write your code here
	$arr = [];
	
    for($i = $l; $i <= $r; $i++) {
        if($i%2 == 1) {
			array_push($arr, $i);
        }
    }
	
	return $arr;
}

print_r(oddNumbers(3, 9)); # returns Array ( [0] => 3 [1] => 5 [2] => 7 [3] => 9 )

# # # 1.
/*
 * Complete the 'countPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY numbers
 *  2. INTEGER k
 */
function countPairs($numbers, $k) {
    // Write your code here
    $arr_pair = array_chunk($numbers, 2);
    $count = 0;

    for($i = 0; $i < count($arr_pair); $i++) {
        // test: print_r($arr_pair[$i]);
        if ($arr_pair[$i][0] + $k == $arr_pair[$i][1]) {
            $count++;
        }
    }
	
    return $count;
}

print_r(countPairs([1, 1, 1, 2], 1)); # returns 1

# # # 2.
/*
 * Complete the 'minSum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY num
 *  2. INTEGER k
 */
function minSum($num, $k) {
    // Write your code here
    // see also:
	# $replace = array(0 => 100);
	# $arr_answer = array_replace($numbers, $replace);
	
	for($i = 0; $i < count($num); $i++) {
		// 1. remove ele
		// 2. % by 2
		// 3. insert ceiling
		$operation = ceil($num[$i]/2);
		$arr_answer[$i] = $operation;
		/* todo: $k
		if() {
		} */
	}
	
	// validate:
	return $arr_answer;
}

print_r(minSum([10, 20, 7], 4)); # returns Array ( [0] => 5 [1] => 10 [2] => 4 )
