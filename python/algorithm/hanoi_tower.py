#named them pillar 1, pillar2, pillar3
#=> p1+p2+p3 = 6

def move(n, p1, p2):
    if n == 1:
        print('Moved 1 from {} to {}'.format(p1, p2))
    
    else:
        # Move n-1 from p1 to pivot pillar
        print('moving {} from current to pivot pillar'.format(n-1))
        move(n-1, p1, 6-p1-p2)
        print('moving 1 biggest at bottom to target pillar')
        move(1, p1, p2)
        print('moving {} from pivot pillar to target pillar'.format(n-1))
        move(n-1, 6-p1-p2, p2)

        print('Nothing else to move')
    
move(3, 1, 3)

