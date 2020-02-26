#Массив размером 2m + 1, где m — натуральное число, заполнен случайным образом. Найдите в массиве медиану. Медианой называется элемент ряда, делящий его на две равные части: в одной находятся элементы, которые не меньше медианы, в другой — не больше медианы.

import random
import task1

#здесь представлен наиболее известный алгоритм выбора медианы без сортировки.
#он реализован только для нечётных длинн массивов (2m+1)

def quickselect(arr, k):

    if len(arr) == 1:
        return arr[0]
    #случайно выбираем то, как разобъем массив
    sub_point = random.choice(arr)

    lows = [el for el in arr if el < sub_point]
    highs = [el for el in arr if el > sub_point]
    all_points = [el for el in arr if el == sub_point]

    #выбираем куда пойдём в реккурсию
    if k < len(lows):
        return quickselect(lows, k)
    elif k < len(lows) + len(all_points):
        return all_points[0]
    else:
        return quickselect(highs, k - len(lows) - len(all_points))


if __name__ == "__main__":
    m = 3
    arr = [random.randint(0,5) for _ in range(0,m*2+1)]
    print(f'Исходный масив: {arr}')
    #для удобства проверки я вывожу отсортированный масссив, он сортируется методом пузырька из моего первого задания
    print(f'Остртированный массив: {task1.babsort(arr)}')
    print(f'Медиана: {quickselect(arr, len(arr) / 2)}')