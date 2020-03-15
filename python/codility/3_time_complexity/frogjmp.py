def solution(X, Y, D):
    import math
    return math.ceil((Y - X) / D)


def test():
    cases = [
        (10, 85, 30, 3),
    ]

    for case in cases:
        jumps = solution(case[0], case[1], case[2])
        print(jumps)

        assert jumps, case[3]


test()
