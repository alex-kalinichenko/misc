# 2. Написать программу сложения и умножения двух шестнадцатеричных чисел.
# При этом каждое число представляется как массив, элементы которого — цифры
# числа.
# Например, пользователь ввёл A2 и C4F. Нужно сохранить их как [‘A’, ‘2’] и
# [‘C’, ‘4’, ‘F’] соответственно. Сумма чисел из примера: [‘C’, ‘F’, ‘1’],
# произведение - [‘7’, ‘C’, ‘9’, ‘F’, ‘E’].
# Примечание: Если воспользоваться функциями hex() и/или int() для
# преобразования систем счисления, задача решается в несколько строк. Для
# прокачки алгоритмического мышления такой вариант не подходит. Поэтому
# использование встроенных функций для перевода из одной системы счисления в
# другую в данной задаче под запретом. Вспомните начальную школу и попробуйте
# написать сложение и умножение в столбик.

# 0 1 2 3 4 5 6 7 8 9  A  B  C  D  E  F
# 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15

a = 'A2' # 12
b = 'C4F'

b10 = 0
for i in b:
    b10 +=
    print(i)

for hex, decimal in zip((0, 1, 2, 3, 4, 5, 6, 7, 8, 9,  A,  B,  C,  D,  E, F),
                        (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15)):


# def arabic_to_roman(data):
#     result = ''
#     for arabic, roman in zip((1000, 900, 500, 400, 100, 90, 50,  40, 10,  9,   5,  4,  1),
#                               ('M','CM', 'D', 'CD','C','XC','L','XL','X','IX','V','IV','I')):
#         result += data // arabic * roman
#         data %= arabic
#     return result


