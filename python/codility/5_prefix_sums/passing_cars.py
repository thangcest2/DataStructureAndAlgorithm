def solution(A):
    last_of_ones = 0
    counter = 0
    length = len(A)

    for i in range(length-1, -1, -1):
        if A[i] == 1:
            last_of_ones += 1
        else:
            counter += last_of_ones

            if counter > 10 ** 9:
                return -1

    return counter


def test():
    cases = [
        ([0, 1, 0, 1, 1], 5),
    ]

    for case in cases:
        r = solution(case[0])
        print(r)

        assert r == case[1]

    from random import randint
    case = []
    for i in range(1000000):
        case.append(randint(0, 1))

    import datetime
    start_time = datetime.datetime.now()

    solution(case)

    print((datetime.datetime.now() - start_time).total_seconds())


test()
