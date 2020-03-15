# n = 10

# for i in range(n):
#     for j in range(n - i):
#         print(' ', end='')
#     for j in range(2 * i - 1):
#         print('*', end='')
#     print()


# you can write to stdout for debugging purposes, e.g.
# print("this is a debug message")

# def solution(N):
#     # write your code in Python 3.6
#     a = list("{0:b}".format(N))
#     gaps = []
    
#     for i, v in enumerate(a):
#         if v == '0':
#             for j in range(i+1, len(a)):
#                 if a[j] == '1':
#                     gaps.append(j - i)
#                     break
    
#     if not gaps:
#         return 0
#     return max(gaps)

def solution(N):
    # write your code in Python 3.6
    a = list("{0:b}".format(N))
    maxx = 0
    i = 0

    while i < len(a):
        if a[i] == '0' and i > 0 and a[i-1] == '1':
            i += 1
            temp_maxx = 1
            while i < len(a):
                if a[i] == '1':
                    if temp_maxx > maxx:
                        maxx = temp_maxx
                        temp_maxx = 0
                    break
                else:
                    i += 1
                    temp_maxx += 1
        i += 1

    return maxx


def test():
    a = {
        '15': 0,
        '20': 1,
        '1041': 5,
        '32': 0,
        '328': 2,
        '6': 0,
        '19': 2,
        '5': 1,
        '1024': 0,
        '42': 1,
        '1162': 3,
        '561892': 3,
        '66561': 9,
        '6291457': 20,
        '74901729': 4,
        '805306373': 25,
        '1610612737': 28,
    }
    for i, v in a.items():
        print(i, v, 'checking ..', end='')
        assert solution(int(i)) == v
        print('passed')

test()
