from common import *

# k = gen_random_array(10)
k = [62, 16, 25, 64, 4, 47, 63, 31, 90, 41]

print(k)

def insertion_sort(a):
    length = len(a)
    for i in range(1, length):
        tmp = a[i]
        j = i-1
        while j >= 0 and tmp < a[j]:
            a[j+1] = a[j]
            j -= 1

        a[j+1] = tmp

def insertion_with_binary_search(a):
    length = len(a)
    for i in range(1, length):
        tmp = a[i]
        sub_sorted_start = 0
        sub_sorted_end = i - 1

        while sub_sorted_start <= sub_sorted_end:
            median = (sub_sorted_start + sub_sorted_end) // 2
            if tmp < a[median]:
                sub_sorted_end = median - 1  
            else:
                sub_sorted_start = median + 1

        print(sub_sorted_start, i)
        j = i - 1
        while j <= i - 1 and j >= sub_sorted_start:
            a[j+1] = a[j]
            j -= 1
        
        a[sub_sorted_start] = tmp

# insertion_sort(k)
insertion_with_binary_search(k)
print(k)
