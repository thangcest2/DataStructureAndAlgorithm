from common import *

a = gen_random_array(10)

print('*' * 50)
print('Before: {}'.format(a))

def bubble_sort(a):
    """ Note than end of range will always lower 1 than the defined threshold
    Number of comparing times, as discrete mathematic: C(2, n) - Complexity at 2 of n
    """
    for i in range(1, 10):
        for j in range(9, i-1, -1):
            if a[j-1] > a[j]:
                a[j-1], a[j] = a[j], a[j-1]
    
    return a

a = bubble_sort(a)

print('*' * 50)
print('After: {}'.format(a))