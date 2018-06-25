from common import gen_random_array, test_sorted

def distrbuted_counting_sort(a):
    x = {}
    length = len(a)
    c = {}
    # build ordered dict of key => number of appearance of value in a
    for i in range(0, length):
        if a[i] in c.keys():
            c[a[i]] = c[a[i]] + 1
        else:
            c[a[i]] = 1
    
    # locate the position each value have to stay after sort
    ck = c.keys()
    for v in range(1, len(ck)):
        c[ck[v]] += c[ck[v-1]]

    # Loop backward to maintain stability of sort. Look forward also works (commented)
    # for i in range(1, length):
    for i in range(length-1, -1, -1):
        x[c[a[i]]] = a[i]
        c[a[i]] = c[a[i]] - 1

    return x.values()

a = [5,5,1,2,2,3,1,1,3,3]
# a = [3, 1, 5, 2, 4, 7, 6, 9, 8, 10]
# a = gen_random_array(1000)
b = distrbuted_counting_sort(a)

print(b)
test_sorted(b)
