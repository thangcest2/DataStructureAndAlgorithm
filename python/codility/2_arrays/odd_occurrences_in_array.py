def solution_old(A):
    # write your code in Python 3.6
    for i, vi in enumerate(A):
        count = 1

        for j, vj in enumerate(A):
            if i != j and vi == vj:
                count += 1

        if count % 2 != 0:
            return vi

    return 0


def solution(A):
    temp = dict()

    for i, vi in enumerate(A):
        if vi not in temp:
            temp[vi] = 1
        else:
            temp[vi] += 1

    for i, count in temp.items():
        if count % 2 == 1:
            return i

    return 0


def test():
    A = [9, 3, 9, 3, 9, 7, 9]

    print(solution(A))

    assert solution(A) == 7


test()
