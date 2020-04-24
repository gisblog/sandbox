```python
# # # test.
'''
 * Complete the 'oddNumbers' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 * 1. INTEGER l
 * 2. INTEGER r
'''
def oddNumbers(l, r):
	# Write your code here
	arr = []
	
	for i in range(l, r):
		if(i % 2 == 1):
			arr.append(i)
	
	return arr

# returns [3, 5, 7]
print(oddNumbers(3, 9))

# # # 1.
'''
 * Complete the 'countPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 * 1. INTEGER_ARRAY numbers
 * 2. INTEGER k
'''
def countPairs(numbers, k):
	# Write your code here
	arr_pair = [numbers[i : i + 2] for i in range(0, len(numbers), 2)]
	count = 0
	
	for i in range(len(arr_pair)):
		# test: print(arr_pair[i])
		if(arr_pair[i][0] + k == arr_pair[i][1]):
			count += 1
	
	return count

# returns 1
print(countPairs([1, 1, 1, 2], 1))

# # # 2.
'''
 * Complete the 'minSum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 * 1. INTEGER_ARRAY num
 * 2. INTEGER k
'''
import math

def minSum(num, k):
	# Write your code here
	# see also:
	# replace = array(0 => 100)
	# arr_answer = array_replace(numbers, replace)
	arr_answer = []
	
	for i in range(len(num)):
		# 1. remove ele
		# 2. % by 2
		# 3. insert ceiling
		operation = math.ceil(num[i] / 2)
		arr_answer.append(operation)
		''' todo: k
		if():
		'''
	
	# validate:
	return arr_answer

# returns Array ( [0] => 5 [1] => 10 [2] => 4 )
print(minSum([10, 20, 7], 4))
```
