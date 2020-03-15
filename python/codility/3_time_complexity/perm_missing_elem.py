def solution(A):
    # write your code in Python 3.6
    length = len(A) + 1
    total = length * (length + 1) // 2

    return total - sum(A)


def test():
    cases = [
        ([2, 3, 1, 5], 4),
    ]

    for case in cases:
        r = solution(case[0])
        print(r)

        assert r == case[1]


test()
