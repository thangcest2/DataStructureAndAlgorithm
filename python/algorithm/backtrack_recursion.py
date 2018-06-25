# @link https://pycallgraph.readthedocs.io/en/master/index.html
# pip3 install pycallgraph
# brew install graphviz
# python3 backtrack_recursion.py
import time
from pycallgraph import PyCallGraph
from pycallgraph.output import GraphvizOutput


"""
#En: List binary string length n
#Vn: Liệt kê dãy nhị phân độ dài n

Sequence | tree of execution:
recur: b[1] = 0,
    child recur #1: b[2] = 0,
        child recur #21: b[3] = 0; i = n; print 000
        child recur #22: b[3] = 1; i = n; print 001
    child recur #2: b[2] = 1,
        child recur #21: b[3] = 0; i = n; print 010
        child recur #22: b[3] = 1; i = n; print 011
recur: b[1] = 1,
    child recur #1: b[2] = 0,
        child recur #21: b[3] = 0; i = n; print 100
        child recur #22: b[3] = 1; i = n; print 101
    child recur #2: b[2] = 1,
        child recur #21: b[3] = 0; i = n; print 110
        child recur #22: b[3] = 1; i = n; print 111
"""

def gen_binary_string(i, n, b, count):
    for j in ('0', '1'):
        b[i] = j
        if i == n:
            count['count'] += 1
            print(''.join(v for (i,v) in b.items()))
        else:
            gen_binary_string(i+1, n, b, count)


"""
#En: Generate all permutation item of {1,2,...n}
#Vn: Liệt kê tất cả các hoán vị của {1,2,...n}
Sequence | tree of execution:
i=1:
    j=1, b1=True, p1=1, then b1=False
        i=2:
            j=1, b1=False, skip
            j=2, b2=True, p2=2 then b2=False
                i=3:
                    j=1, b1=False, skip
                    j=2, b2=False, skip
                    j=3, b3=True, p3=3, then b3=False, print [1,2,3], b3=True
                b2=True
            j=3, b3=True, p2=3 then b3=False
                i=3:
                    j=1, b1=False, skip
                    j=2, b2=True, p3=2, then b2=False, print [1,3,2], b2=True
                    j=3, b3=False,skip
                b3=True
        b1=True
    j=2, b2=True, p1=2, then b2=False
        i=2:
            j=1, b1=True, p2=1, then b1=False
                i=3:
                    j=1, b1=False, skip
                    j=2, b2=False, skip
                    j=3, b3=True, p3=3, then b3=False, print [2,1,3], b3=True
                b1=True
            j=2, b2=False, skip
            j=3, b3=True, p2=3, then b3=False
                i=3:
                    j=1, b1=True, p3=1, then b1=False, print [2,3,1], b1=True
                    j=2, b2=False, skip
                    j=3, b3=False, skip
                b3=True
        b2=True
    j=3, b3=True, p1=3, then b3=False
        i=2:
            j=1, b1=True, p2=1, then b1=False
                i=3:
                    j=1,j=3 b1,b3=False, skip
                    j=2, b2=True, p3=2, then b2=False, print [3,1,2], b2=True
                b1=True
            j=2, b2=True, p2=2, then b2=False
                i=3:
                    j=1, b1=True, p3=1, then b1=False, print [3,2,1], b1=True
                    j=2, b2=False, skip
                    j=3, b3=False, skip
                b2=True
        b3=True

    Finish program!!!
"""
def gen_permutation(i, n, p, b):
    for j in range(1, n+1):
        if b[j] == True:
            p[i] = j
            b[j] = False
            if i == n:
                print(list(p.values()))
            else:
                gen_permutation(i+1, n, p, b)
            b[j] = True


"""
#En: List all combination k members of {1,2,...n}
#Vn: Liệt kê tổ hợp chập k của n
"""
def gen_combination_k_member(i, k, n, c):
    for j in range(c[i-1] + 1, n - k + i + 1):
        c[i] = j
        if i == k:
            print(list(c.values())[1:])
        else:
            gen_combination_k_member(i+1, k, n, c)
        

"""
#En: Queens math
#Vn: Bài toán xếp hậu
"""
from draw_queens import print_queens
def gen_queen(i, n, col, diagonal_1, diagonal_2, queens):
    for j in range(1, n+1):
        if (col[j] == True) and (diagonal_1[i+j] == True) and (diagonal_2[i-j] == True):
            queens[i] = j
            col[j] = False
            diagonal_1[i+j] = False
            diagonal_2[i-j] = False
            if i == n:
                # print(list(queens.values()))
                print_queens(list(queens.values()))
            else:
                gen_queen(i+1, n, col, diagonal_1, diagonal_2, queens)
            
            col[j] = True
            diagonal_1[i+j] = True
            diagonal_2[i-j] = True

if __name__ == '__main__':
    # count = {'count': 0}
    # gen_binary_string(1, 3, {}, count)
    # print('Total times: {}'.format(count['count']))
    # graphviz = GraphvizOutput()
    # graphviz.output_file = 'basic.png'
    # with PyCallGraph(output=graphviz):
    #     gen_binary_string(1, 3, {}, count)

    # b = {} # Flag list with key from 1..n of True
    # for i in range(1,4):
    #     b[i] = True
    # gen_permutation(1, 3, {}, b) # n=3

    # gen_combination_k_member(1, 3, 5, {0: 0}) # n=5, k=3
    
    n=6
    col = {}
    diagonal_1 = {}
    diagonal_2 = {}
    for i in range(1, n+1):
        col[i] = True
    for i in range(2, 2*n+1):
        diagonal_1[i] = True
    for i in range(1-n, n):
        diagonal_2[i] = True
    gen_queen(1, n, col, diagonal_1, diagonal_2, {})