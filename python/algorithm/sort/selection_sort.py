from common import *

k = gen_random_array(10)

print(k)

def selection_sort(a):
    length = len(a)
    for i in range(0, length - 1):
        jmin = i
        for j in (range(i+1, length)):
            jmin = j if a[j] < a[jmin] else None
            
        a[i], a[jmin] = a[jmin], a[i] if jmin != i else None

selection_sort(k)

print(k)