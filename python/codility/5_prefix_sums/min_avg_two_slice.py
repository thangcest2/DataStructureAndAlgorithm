def solution(A):
    pass


def test():
    cases = [
        ('AC', [0, 0, 1], [0, 1, 1], [1, 1, 2]),
        ('A', [0], [0], [1]),
        ('CAGCCTA', [2, 5, 0], [4, 5, 6], [2, 4, 1]),
    ]

    for case in cases:
        r = solution(case[0], case[1], case[2])
        print(r)

        assert r == case[3]

    from random import randint, choice

    impacts = ['A', 'C', 'G', 'T']
    for x in range(10):
        S = ''
        for i in range(10 ** 5):
            S += choice(impacts)

        case = [S, [0] * 50000, [10 ** 5 - 1] * 50000]
        # case = ['G' * 10 ** 5, [0] * 50000, [10 ** 5] * 50000]

        import datetime
        start_time = datetime.datetime.now()

        solution(case[0], case[1], case[2])

        print((datetime.datetime.now() - start_time).total_seconds())


test()
