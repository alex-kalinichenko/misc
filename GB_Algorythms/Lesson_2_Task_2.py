# 2.Посчитать четные и нечетные цифры введенного натурального числа. Например, если
# введено число 34560, в нем 3 четные цифры (4, 6 и 0) и 2 нечетные (3 и 5).

x = input('Введите натуральное число: ')
number = str(x)
odd = []
odd_num = 0
even = []
even_num = 0
for digit in number:
    if int(digit) % 2 == 0:
        odd.append(digit)
        odd_num += 1
    else:
        even.append(digit)
        even_num += 1
print(f'Количество чётных цифр = {odd_num}, Это цифры {odd}')
print(f'Количество нечётных цифр = {even_num}, Это цифры {even}')

Избегать создания листов!!!!