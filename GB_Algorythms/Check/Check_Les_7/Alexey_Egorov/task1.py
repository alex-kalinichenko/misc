# Отсортируйте по убыванию методом пузырька одномерный целочисленный массив, заданный случайными числами на промежутке [-100; 100). Выведите на экран исходный и отсортированный массивы.

import random

#самое простое - если не было перестановок, значит алгоритма закончил работать раньше и цикл можно прервать
def babsort(arr):
    n = 1
    while n < len(arr):
        is_swap = False
        for i in range(len(arr)-n):
            if arr[i] < arr [i+1]:
                arr[i], arr[i+1] = arr[i+1], arr[i]
                is_swap = True
        n += 1
        if not is_swap:
            break
    return arr

if __name__ == "__main__":
    n = 20
    arr = [random.randint(-100,99) for _ in range(1,n)]
    print(f'Исходный масив: {arr}')
    print(f'Остртированный массив: {babsort(arr)}')