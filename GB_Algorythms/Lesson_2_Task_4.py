# 4. Найти сумму n элементов следующего ряда чисел: 1, -0.5, 0.25, -0.125,…
# Количество элементов (n) вводится с клавиатуры.

# n = int(input('Расчёт суммы ряда: 1, -0.5, 0.25, -0.125,… \n'
#               'Введите количество элементов для расчёта: '))


def func(n):
    if n == 1:
        return 1
    else:
        return func(n - 1) / -2


print(func(4))


def func_sum(n):
    if n <= 1:
        return 1
    else:
        return (n - 1) / -2 + func_sum(n - 1)


print(func_sum(3))

