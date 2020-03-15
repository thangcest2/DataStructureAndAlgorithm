def move_right(array):
    moved_list = list()

    moved_list.append(array[-1])
    for i in array[:-1]:
        moved_list.append(i)

    return moved_list


def solution(a, k):
    len_of_a = len(a)
    if k < 1 or k == len_of_a or len_of_a == 0:
        return a

    while k > 0:
        a = move_right(a)
        k -= 1

    return a


def test():
    cases = [
        ([3, 8, 9, 7, 6], 3, [9, 7, 6, 3, 8]),
        ([3, 8, 9, 7, 6], 1, [6, 3, 8, 9, 7]),
        ([1, 2, 3, 4], 4, [1, 2, 3, 4])
    ]

    for case in cases:
        print(solution(case[0], case[1]), case[2])

        assert solution(case[0], case[1]) == case[2]


test()
