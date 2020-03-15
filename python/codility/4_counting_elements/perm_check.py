def solution(A):
    length = len(A)
    should_total = length * (length + 1) // 2

    nested = dict()

    real_total = 0
    for i in A:
        if i > length:
            return 0

        real_total += i

        if i not in nested:
            nested[i] = 1
        else:
            nested[i] += 1

        if nested[i] > 1:
            return 0

    if should_total == real_total:
        return 1

    return 0


def test():
    cases = [
        ([2, 3, 1, 4, 5], 1),
        ([2, 3, 1, 5], 0),
        ([1, 4, 1], 0),
        ([2, 2, 2], 0),
    ]

    for case in cases:
        r = solution(case[0])
        print(r)

        assert r == case[1]

    case = list(range(1, 100000))

    import datetime
    start_time = datetime.datetime.now()

    solution(case)

    print((datetime.datetime.now() - start_time).total_seconds())

test()
