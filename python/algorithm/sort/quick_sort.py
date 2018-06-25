from common import gen_random_array, test_sorted
import random

a = gen_random_array(2000)
# a = [38, 27, 63, 11, 45, 84, 1, 46, 33, 83,8,6,7,2,4,5,1,9,3,10]
# a = [8,6,7,2,4,5,1,9,3,10]
# a = [3, 1, 5, 2, 4]
# a = [3, 1, 5, 2, 4, 7, 6, 9, 8, 10]
# print(a)

def quick_sort(a, lowest, highest):
    if lowest < highest:
        pivot_val = a[random.randint(lowest, highest)]

        i = lowest
        j = highest

        while i <= j:
            while a[i] < pivot_val:
                i += 1
            while a[j] > pivot_val:
                j -= 1
            
            if i <= j:
                if i < j:
                    a[i], a[j] = a[j], a[i]
                i += 1
                j -= 1

        quick_sort(a, lowest, j)
        quick_sort(a, i, highest)
        
print('*' * 100)
quick_sort(a, 0, len(a) - 1)
print('*' * 100)

# print(a)
test_sorted(a)
# print('FINAL: ', a[0], a[1999])
