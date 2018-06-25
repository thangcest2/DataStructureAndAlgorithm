import random

def gen_random_array(size):
    return [random.randint(1, size) for i in range(size)]

def test_sorted(a):
    for i in range(0, len(a)-1):
        if a[i+1] - a[i] < 0:
            print('FALSE, i={}; ai={}; ai+1={}'.format(i, a[i], a[i+1]))
            return False
    
    print('TRUE')
    return True