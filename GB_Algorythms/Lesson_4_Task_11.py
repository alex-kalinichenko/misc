# Задача 3 из урока 3. Вариант решения 1
# В массиве случайных целых чисел поменять
# местами минимальный и максимальный элементы.

from random import randint


def min_max_ch(n):
    input_list = [randint(0, n) for i in range(n)]
    # print(input_list)
    min_pos = 0
    max_pos = 0
    for pos, el in enumerate(input_list):
        if el < input_list[min_pos]:
            min_pos = pos
        if el > input_list[max_pos]:
            max_pos = pos
    input_list[min_pos], input_list[max_pos] = input_list[max_pos], input_list[min_pos]
    return input_list


# print(min_max_ch(10))

# "Lesson_4_Task_11.min_max_ch(10)"
# 100 loops, best of 5: 12.3 usec per loop

# "Lesson_4_Task_11.min_max_ch(100)"
# 100 loops, best of 5: 113 usec per loop

# Lesson_4_Task_11.min_max_ch(500)"
# 100 loops, best of 5: 592 usec per loop

# "Lesson_4_Task_11.min_max_ch(1000)"
# 100 loops, best of 5: 1.19 msec per loop

# "Lesson_4_Task_11.min_max_ch(10000)"
# 100 loops, best of 5: 13 msec per loop








