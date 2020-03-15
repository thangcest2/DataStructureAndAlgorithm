def solution_done(X, A):
    marks = dict()
    total = X * (X + 1) // 2

    for i, v in enumerate(A):
        if v not in marks:
            marks[v] = True
            total -= v
        if total == 0:
            return i

    return -1


def solution(X, A):
    leaves = [i for i in range(1, X+1)]
    for index, value in enumerate(A):
        if value in leaves:
            leaves.remove(value)
            if len(leaves) == 0:
                return index
    return -1


def test():
    cases = [
        (5, [1, 3, 1, 4, 2, 3, 5, 4], 6),
        (5, [1, 5, 1, 4, 2, 3, 3, 4], 5),
    ]

    for case in cases:
        r = solution(case[0], case[1])
        print(r)

        assert r == case[2]

    case = list(range(1, 100000))

    import datetime
    start_time = datetime.datetime.now()

    solution(99999, case)

    print((datetime.datetime.now() - start_time).total_seconds())

test()
