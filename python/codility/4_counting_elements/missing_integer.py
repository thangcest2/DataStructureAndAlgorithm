def solution(A):
    # write your code in Python 3.6
    A = set(A)
    for i in range(1, 1000000):
        if i not in A:
            return i


def test():
    cases = [
        ([1, 3, 6, 4, 1, 2], 5),
        ([1, 2, 3], 4),
        ([-1, -3], 1),
    ]

    for case in cases:
        r = solution(case[0])
        print(r)

        assert r == case[1]

    case = list(range(1, 1000000))
    del case[999998]

    import datetime
    start_time = datetime.datetime.now()

    solution(case)

    print((datetime.datetime.now() - start_time).total_seconds())


test()
