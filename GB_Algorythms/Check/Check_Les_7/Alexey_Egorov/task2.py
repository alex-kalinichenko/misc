#Отсортируйте по возрастанию методом слияния одномерный вещественный массив, заданный случайными числами на промежутке [0; 50). Выведите на экран исходный и отсортированный массивы.

import random

def mergeSort(arr):
    if len(arr)>1:
        mid = len(arr) // 2
        left_part = arr[:mid]
        right_part = arr[mid:]

        mergeSort(left_part)
        mergeSort(right_part)

        i=0
        j=0
        k=0
        while i < len(left_part) and j < len(right_part):
            if left_part[i]<right_part[j]:
                arr[k] = left_part[i]
                i = i+1
            else:
                arr[k]=right_part[j]
                j = j+1
            k=k+1

        while i < len(left_part):
            arr[k] = left_part[i]
            i = i+1
            k = k+1

        while j < len(right_part):
            arr[k] = right_part[j]
            j = j+1
            k = k+1
    return arr


n = 20
arr = [random.randint(0,49) for _ in range(1,n)]
print(f'Исходный масив: {arr}')
print(f'Остртированный массив: {mergeSort(arr)}')


