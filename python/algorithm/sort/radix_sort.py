from common import gen_random_array, test_sorted

def radix_exchange_sort(a, l, r, bit_num):
    if l < r:
        i = l
        j = r
        while (i < j):
            while (i<j):
                ai_binary_repr = '{0:04b}'.format(a[i])
                # print('IIIIIII AI AIB B', i, a[i], ai_binary_repr, ai_binary_repr[bit_num])
                if int(ai_binary_repr[bit_num]) == 0:
                    i += 1
                else:
                    break
            while (i<j):
                aj_binary_repr = '{0:04b}'.format(a[j])
                # print('JJJJJJJ AJ AJB B', j, a[j], aj_binary_repr, ai_binary_repr[bit_num])
                if int(aj_binary_repr[bit_num]) == 1:
                    j -= 1
                else:
                    break
            
            a[i], a[j] = a[j], a[i]
            # print('CHANGED I J A', i, j, a)
        
        binary_repr = '{0:04b}'.format(a[j])
        if int(binary_repr[bit_num]) == 0:
            j += 1
        if bit_num <= 3:
            radix_exchange_sort(a, l, j-1, bit_num+1)
            radix_exchange_sort(a, j, r, bit_num+1)
        

a = [3, 1, 5, 2, 4, 7, 6, 9, 8, 10]
# a = gen_random_array(10)
print(a)

radix_exchange_sort(a, 0, len(a) - 1, 0)

print(a)
test_sorted(a)

