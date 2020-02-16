# 1. Отсортируйте по убыванию методом пузырька одномерный целочисленный
# массив, заданный случайными числами на промежутке [-100; 100).
# Выведите на экран исходный и отсортированный массивы.
# Примечания:
# a. алгоритм сортировки должен быть в виде функции, которая принимает
# на вход массив данных,
# b. постарайтесь сделать алгоритм умнее, но помните, что у вас должна
# остаться сортировка пузырьком. Улучшенные версии сортировки, например,
# расчёской, шейкерная и другие в зачёт не идут.


import random

array = [i for i in range(-100, 100)]
random.shuffle(array)
print(array)


def bubble_sort_smart(array):
    n = 1
    count = 0
    while n < len(array):
        count_if_sorted = 0  # счётчик количества остортированных пар
        for i in range(len(array) - n):
            if array[i] > array[i + 1]:
                array[i], array[i + 1] = array[i + 1], array[i]
            else:
                count_if_sorted += 1  # + 1 если пара уже отсортированна

            # если все пары отсортированы, то завершаем цикл
            if count_if_sorted >= len(array) - n:
                print('Количество проходов = ', count)
                return array

        count += 1
        n += 1
        print(array)  # вывод массива после каждого прохода
    print('Количество проходов = ', count)


# В результате оптимизации, в случае если все числа уже отсортированы
# выполнение алгоритма завершается досрочно

bubble_sort_smart(array)
print(array)
