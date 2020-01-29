# Задача 3 из урока 3. Вариант решения 2
# В массиве случайных целых чисел поменять
# местами минимальный и максимальный элементы.

from random import randint


def min_max_ch(n):
    input_list = [randint(0, n) for i in range(n)]
    # print(input_list)
    min_num = min(input_list)
    max_num = max(input_list)
    pos_min = input_list.index(min_num)
    pos_max = input_list.index(max_num)
    input_list[pos_min], input_list[pos_max] = input_list[pos_max], input_list[pos_min]
    return input_list


# print(min_max_ch(10))


# "Lesson_4_Task_12.min_max_ch(10)"
# 100 loops, best of 5: 12.6 usec per loop

# "Lesson_4_Task_12.min_max_ch(100)"
# 100 loops, best of 5: 109 usec per loop

# "Lesson_4_Task_12.min_max_ch(500)"
# 100 loops, best of 5: 568 usec per loop

# "Lesson_4_Task_12.min_max_ch(1000)"
# 100 loops, best of 5: 1.16 msec per loop

# "Lesson_4_Task_12.min_max_ch(10000)"
# 100 loops, best of 5: 12.3 msec per loop
