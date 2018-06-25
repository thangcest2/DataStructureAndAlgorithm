from common import gen_random_array, test_sorted

def merge(x, y, start, mid, end):
    p = start
    i = start
    j = mid

    while i <= mid and j < end:
        if x[i] <= x[j]:
            y[p] = x[i]
            i += 1
        else:
            y[p] = x[j]
            j += 1
        p += 1

    if i <= mid and p < size:
        for k in range(i, mid):
            y[p] = x[k]
    elif p < size:
        for k in range(j, end):
            y[p] = x[k]

    # print(y)
    # exit()


def merge_sort(x, y, l, size):
    start = 0
    mid = l
    end = 2 * l
    while (end <= size):
        merge(x, y, start, mid, end)
        start += 2 * l
        mid += 2 * l
        end += 2 * l

    if  mid < size:
        merge(x, y, start, mid, size)
    else:
        if start <= size:
            for i in range(start, size):
                y[i] = x[i]


########### NOT COMPLETED YET
# a = gen_random_array(10)
a = [3, 1, 5, 2, 4, 7, 6, 9, 8, 10]
t = [0 for x in range(0, len(a))]
print(a)
print(t)

size = len(a)
flag = True
l = 1
while l < size:
    if flag:
        merge_sort(a, t, l, size)
    else:
        merge_sort(t, a, l, size)
    l *= 2
    flag = not flag
    
if not flag:
    print(t)
else:
    print(a)

test_sorted(a)