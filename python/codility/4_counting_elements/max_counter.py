def solution_cheat(N, A):
    # write your code in Python 3.6
    counters = [0] * N
    maxx = 0

    i = 0
    while i < len(A):
        if A[i] == N + 1:
            counters = [maxx] * N

            try:
                while A[i + 1] == N + 1:
                    i += 1
            except IndexError:
                pass

        else:
            ci = A[i] - 1
            counters[ci] += 1
            if counters[ci] > maxx:
                maxx = counters[ci]

        i += 1

    return list(counters)


def solution(N, A):
    current_max, max_for_all = 0, 0
    counters = [0] * N

    for instructor in A:
        if instructor == N + 1:
            max_for_all = current_max
        else:
            index = instructor - 1

            if counters[index] < max_for_all:
                counters[index] = max_for_all + 1
            else:
                counters[index] += 1

            if counters[index] > current_max:
                current_max = counters[index]

    for index, value in enumerate(counters):
        if value < max_for_all:
            counters[index] = max_for_all

    return counters


def test():
    cases = [
        (5, [3, 4, 4, 6, 1, 4, 4], [3, 2, 2, 4, 2]),
        (5, [3, 4, 4, 6, 1, 4, 3, 4, 6, 6, 4, 4], [4, 4, 4, 6, 4]),
    ]

    for case in cases:
        r = solution(case[0], case[1])
        print(r)

        assert r == case[2]

    N = 99999
    big_case1 = list([N + 1] * (10 ** 6))

    big_case2 = list(range(1, N))
    for i, v in enumerate(big_case2):
        if i % 2 == 1:
            big_case2[i] = N + 1

    import datetime

    for case in [big_case1, big_case2]:
        start_time = datetime.datetime.now()
        solution(N, case)
        print((datetime.datetime.now() - start_time).total_seconds())


test()
