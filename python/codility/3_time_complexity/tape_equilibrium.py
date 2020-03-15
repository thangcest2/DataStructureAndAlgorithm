def solution_old(A):
    import math

    min_diff = 1000 ** 2
    for p in range(1, len(A)):
        diff = int(abs(sum(A[0:p]) - sum(A[p:])))
        if diff < min_diff:
            min_diff = diff

    return min_diff


def solution(A):
    length_a = len(A)

    if length_a == 1 or length_a == 0:
        return 0

    left_total = A[0]
    right_total = sum(A) - left_total

    if length_a == 2:
        return abs(right_total - left_total)

    min_diff = abs(right_total - left_total)

    for p in range(1, length_a - 1):
        left_total += A[p]
        right_total -= A[p]

        diff = abs(right_total - left_total)

        if diff < min_diff:
            min_diff = diff

    return min_diff


def test():
    cases = [
        ([3], 0),
        ([3, 10], 7),
        ([3, 1, 2, 4, 3], 1),
    ]

    for case in cases:
        r = solution(case[0])
        print(r, case[1])

        assert r == case[1]


test()
