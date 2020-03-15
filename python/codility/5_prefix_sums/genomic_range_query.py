def solution(S, P, Q):
    impacts = {'A': 1, 'C': 2, 'G': 3, 'T': 4}
    prefix_matrix = {}
    appearance_counts = {
        x: 0 for x in ['A', 'C', 'G']
    }

    for i in range(len(S)):
        prefix_matrix[i] = {
            'A': appearance_counts['A'],
            'C': appearance_counts['C'],
            'G': appearance_counts['G'],
        }

        if S[i] != 'T':
            appearance_counts[S[i]] += 1

    prefix_matrix[len(S)] = {
        'A': appearance_counts['A'],
        'C': appearance_counts['C'],
        'G': appearance_counts['G'],
    }

    results = []
    for i in range(len(P)):
        pi, qi = P[i], Q[i] + 1
        if pi == qi:
            results.append(impacts[S[pi]])
        else:
            if prefix_matrix[qi]['A'] > prefix_matrix[pi]['A']:
                results.append(1)
            elif prefix_matrix[qi]['C'] > prefix_matrix[pi]['C']:
                results.append(2)
            elif prefix_matrix[qi]['G'] > prefix_matrix[pi]['G']:
                results.append(3)
            else:
                results.append(4)

    return results


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
