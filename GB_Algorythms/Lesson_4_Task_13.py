# Задача 3 из урока 3. Вариант решения 3
# В массиве случайных целых чисел поменять
# местами минимальный и максимальный элементы.

from random import randint
import functools


@functools.lru_cache()
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

# "Lesson_4_Task_13.min_max_ch(10)"
# 100 loops, best of 5: 94 nsec per loop

# "Lesson_4_Task_13.min_max_ch(100)"
# 100 loops, best of 5: 94 nsec per loop

# "Lesson_4_Task_13.min_max_ch(500)"
# 100 loops, best of 5: 93 nsec per loop

# "Lesson_4_Task_13.min_max_ch(100)"
# 100 loops, best of 5: 96 nsec per loop

# "Lesson_4_Task_13.min_max_ch(1000)"
# 100 loops, best of 5: 95 nsec per loop

# "Lesson_4_Task_13.min_max_ch(10000)"
# 100 loops, best of 5: 94 nsec per loop
