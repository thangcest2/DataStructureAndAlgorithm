a = 'Hi Thang'
b = 'How are you ?'
c = 'How old are you ?'
d = 27.5

# possible string operations
print(a + ',' + b)

print('*' * 20)
print('{}, {}'.format(a, b))
print('{greeting}, {first_q} I am good, Thanks'.format(greeting=a, first_q=b))
print('{second_q} {age:.2f}'.format(age=d, second_q=c))

print('*' * 20)
print('%s' % a)
print('%s, %s' % (a, b))
print('%s %.2f' % (c, d))

# advanced
from math import pi, e
print(f"PI number is about {pi}")
print(f"PI number is about {pi:.2f}")

x = 10
print(f"10 in binary {x:b}") #binary

## width, thousands seperator
print('num:10'.format(num=111))
print('{pi_num:10.2f}'.format(pi_num=pi))
print('{:.6}'.format('Hello: Skipped from here'))
print('9 power 9 with ts seperator is {:,}'.format(9**9))