#  Написать программу сложения и умножения двух шестнадцатеричных чисел.
# При этом каждое число представляется как массив, элементы которого — цифры числа.

from collections import deque

M= ['0', '1', '2','3','4','5','6','7','8','9', 'A','B','C','D','E','F']
N= {'0':0, '1':1, '2':2,'3':3,'4':4,'5':5,'6':6,'7':7,'8':8,'9':9, 'A':10,'B':11,'C':12,'D':13,'E':14,'F':15}


m1 = deque(input('Введите первое число (1-9, A-F): '))
m2 = deque(input('Введите второе число (1-9, A-F): '))


def sum_num(m1, m2):
    if len(m1) > len(m2):
        n1, n2= m1.copy(), m2.copy()
    else: n1, n2 = m2.copy(), m1.copy()
    #print(m1)
    n2.extendleft('0' * (len(n1) - len(n2)))
    R = deque()
    add = 0

    for i in range(len(n1) -1, -1, -1):
        num1 = N[n1[i]]
        num2 = N[n2[i]]
        #print(num2)
        s_num = num1 + num2 + add
        if s_num >= 16:
            add = 1
            s_num -= 16
        else:
            add = 0
        R.appendleft(M[s_num])
    if add == 1 :
        R.appendleft('1')
    return R


def mult(m1, m2):

    if len(m1) > len(m2):
        n1, n2 = m1.copy(), m2.copy()
    else:
        n1, n2 = m2.copy(), m1.copy()

    n2.extendleft('0' * (len(n1) - len(n2)))

    R = deque()

    for i in range (len(n1) - 1, -1, -1):
        num2 = N[n2[i]]
        s = deque()
        for j in range(num2):
            s= sum_num(s, n1)
        #print(n1)
        s.extend('0' * (len(n1) - i -1))
        R = sum_num(R, s)
    return R


print(f'A+B = {sum_num(m1,m2)}')
print(f'A*B = {mult(m1,m2)}')
