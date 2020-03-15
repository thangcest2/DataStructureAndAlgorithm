from .common import *

# a = gen_random_array(2000)
# a = [8,6,7,2,4,5,1,9,3]
a = [38, 27, 63, 11, 45, 84, 1, 46, 33, 83, 8, 6, 7, 2, 4, 5, 1, 9, 3, 10]


# shell sort on top of insersion sort
def shell_sort(a):
    length = len(a)
    h = length // 2

    while h > 0:
        for i in range(h, length):
            tmp = a[i]
            j = i - h
            while j >= 0 and tmp < a[j]:
                a[j + h] = a[j]
                j -= h

            a[j + h] = tmp

        h = h // 2


shell_sort(a)

print(a)
test_sorted(a)
# print('FINAL: ', a[0], a[1999])
