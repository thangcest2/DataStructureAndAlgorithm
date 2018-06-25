def fibonaci(n):
    if n == 0:
        return 0
    if n == 1:
        return 1
    return fibonaci(n-1) + fibonaci(n-2)

print('*' * 100)
# Fibonaci trick by reduce + lambda
from functools import reduce
fib = lambda n: reduce(lambda x, _: x+[x[-1]+x[-2]], range(n-2), [1, 1])
print('Fibonaci list of n = 10 with lambda trick: {}'.format(fib(10)))
# print('0 1 1 2 3 5 8 13 21 34 55')
print('Fibonaci of with n = 10: {}'.format(fibonaci(10)))

def factorial(n):
    if n == 1:
        return 1
    
    return n * factorial(n-1)

print('*' * 100)
print('Factorial of 10: {}'.format(factorial(10)))