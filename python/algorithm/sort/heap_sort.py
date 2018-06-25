from common import gen_random_array, test_sorted

def adjust(a, root, endnode):
    key = a[root]
    while root * 2 <= endnode:
        c = root * 2
        if (c < endnode) and a[c] < a[c+1]:
            c += 1
        if a[c] <= key:
            break
        a[root] = a[c]
        root = c

    a[root] = key


def heap_sort(a, n):
    for r in range(int(n//2), -1, -1):
        adjust(a, r, n)
        # print(a)
        # exit()

    # print(a)
    # exit()

    for i in range(n, 0, -1):
        a[1], a[i] = a[i], a[1]
        adjust(a, 1, i-1)


######################### SKIPPED, uncompleted understanding

a = [3, 1, 5, 2, 4, 7, 6, 9, 8, 10]
print(a)
heap_sort(a, 9)
print(a)