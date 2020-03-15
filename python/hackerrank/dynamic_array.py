#!/bin/python3

import math
import os
import random
import re
import sys


#
# Complete the 'dynamicArray' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts following parameters:
#  1. INTEGER n
#  2. 2D_INTEGER_ARRAY queries
#

def dynamicArray(n, queries):
    arr = []
    for i in range(n):
        arr.append([])

    res = []
    last_answer = 0
    for query in queries:
        q_type, x, y = query

        sequence_index = (x ^ last_answer) % n
        if q_type == 2:
            idx = y % len(arr[sequence_index])
            last_answer = arr[sequence_index][idx]
            res.append(last_answer)
        elif q_type == 1:
            arr[sequence_index].append(y)

    return res


queries = [
    [1, 0, 5],
    [1, 1, 7],
    [1, 0, 3],
    [2, 1, 0],
    [2, 1, 1],
]

print(dynamicArray(2, queries))

# if __name__ == '__main__':
#     fptr = open(os.environ['OUTPUT_PATH'], 'w')
#
#     first_multiple_input = input().rstrip().split()
#
#     n = int(first_multiple_input[0])
#
#     q = int(first_multiple_input[1])
#
#     queries = []
#
#     for _ in range(q):
#         queries.append(list(map(int, input().rstrip().split())))
#
#     result = dynamicArray(n, queries)
#
#     fptr.write('\n'.join(map(str, result)))
#     fptr.write('\n')
#
#     fptr.close()
