from collections import deque

dict16to10 = {'A':10, 'B':11, 'C':12, 'D':13, 'E':14, 'F':15, '0': 0, '1': 1, '2': 2, '3': 3, '4':4, '5':5, '6':6, '7':7, '8':8, '9':9}
dict10to16 = {0:'0',1:'1',2:'2',3:'3',4:'4',5:'5',6:'6',7:'7',8:'8',9:'9',10:'A',11:'B',12:'C',13:'D',14:'E',15:'F'}

def sum16(num1, num2):
    a = deque(num1)
    b = deque(num2)
    c = deque()
    p = 0
    for _ in range(max(len(a), len(b))):
        sym1 = dict16to10[a.pop()] if len(a) > 0 else 0
        sym2 = dict16to10[b.pop()] if len(b) > 0 else 0
        sum_two_num = sym2+sym1+p
        p = sum_two_num // 16
        if sum_two_num > 15:
            sum_two_num -= 16
        c.appendleft(dict10to16[sum_two_num])

    if p == 1:
        c.appendleft(dict10to16[1])

    return ''.join(c)

#умножаем длинное num1 на одно число num2
def mult16ls(num1,num2):
    a = deque(num1)
    num2 = dict16to10[num2]
    c = deque()
    p = 0
    while len(a) > 0:
        res = dict16to10[a.pop()]*num2+p
        p = res // 16
        if res > 15:
            res = res % 16
        c.appendleft(dict10to16[res])

    if p > 0:
        c.appendleft(dict10to16[p])

    return ''.join(c)

#умножаем  длинное на длинное
def mult16ll(num1, num2):
    res = '0'
    b = deque(num2)
    for i in range(len(b)):
        res = sum16(res,mult16ls(num1,b.pop())+'0'*i)
    return res

#считается, что все числа вводятся корректно
#num1 = input('Введите первое число в 16-х системе: ')
#num2 = input('Введите второе число в 16-х системе: ')
num1 = 'A2'
num2 = 'C4F'

print(sum16(num1, num2))
print(mult16ll(num1, num2))
