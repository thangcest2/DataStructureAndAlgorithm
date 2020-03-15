from typing import Tuple, List

class X:
    name = 'X'

class Y:
    name = 'Y'


def test() -> Tuple[List[X], List[Y]]:
    a1 = X()
    a2 = X()
    # b1 = Y()
    # b2= Y()
    # b3= Y()

    # return (a1, a2, b1, b2, b3)
    return (1, 2)


aaa = test()

for a in aaa:
    print(a)
    # print(a.name)
