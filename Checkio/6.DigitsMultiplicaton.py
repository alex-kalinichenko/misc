'''You are given a positive integer. Your function should calculate
the product of the digits excluding any zeroes.
For example: The number given is 123405. The result will be 1*2*3*4*5=120
(don't forget to exclude zeroes).
Input: A positive integer.
Output: The product of the digits as an integer.
Precondition: 0 < number < 10^6'''

number1 = 1023405
list1 = []
num1 = 1

for i in str(number1):
    if int(i) != 0:
        list1.append(int(i))
        print(i)
for i in list1:
    num1 *= i
print(list1)
print(num1)

# 2-й способ
number1 = 1023405
list1 = []
num1 = 1
def checkio(data: number1):
    list1 = []
    num1 = 1
    for i in str(number1):
        if int(i) != 0:
            list1.append(int(i))
    print(list1)
    for i in list1:
        num1 *= i
    print("Result:", num1)
    return num1
print(checkio(number1))
print(num1)  # переменная не вызывается вне функции