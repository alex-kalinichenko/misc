#6 из третьего урока В одномерном массиве найти сумму элементов, находящихся между минимальным и максимальным элементами. Сами минимальный и максимальный элементы в сумму не включать.

import random
import sys
#import memory_profiler

#исходный вариант
#@profile
def var1(arr = [], n = 10, min_gen = 1, max_gen = 10):

    min_pos = 0
    max_pos = 0
    if not arr:
        arr = [random.randint(min_gen, max_gen) for _ in range(n)]

    min = arr[0]
    for i in range(n):
        if arr[i] < min:
            min = arr[i]
            min_pos = i

    max = arr[0]
    for i in range(n):
        if arr[i] > max:
            max = arr[i]
            max_pos = i

    sum = 0
    if max_pos != min_pos:
        if min_pos > max_pos:
            var = max_pos
            max_pos = min_pos
            min_pos = var
        for item in arr[min_pos+1:max_pos]:
            sum += item

    return locals()

#убираем линшее объявление переменных, поиск максимума и минимума через встроенные функции
#@profile
def var2(arr = [], n = 10, min_gen = 1, max_gen = 10):
    if not arr:
        arr = [random.randint(min_gen, max_gen) for _ in range(n)]

    min_v = min(arr)
    min_pos = arr.index(min_v)
    max_v = max(arr)
    max_pos = arr.index(max_v)

    sum = 0
    if max_pos != min_pos:
        if min_pos > max_pos:
            var = max_pos
            max_pos = min_pos
            min_pos = var
        for item in arr[min_pos+1:max_pos]:
            sum += item

    return locals()

#избавляемся от значений максимумов и минимумов, считаем сумму через функции
#@profile
def var3(arr = [], n = 10, min_gen = 1, max_gen = 10):
    if not arr:
        arr = [random.randint(min_gen, max_gen) for _ in range(n)]

    min_pos = arr.index(min(arr))
    max_pos = arr.index(max(arr))

    if max_pos != min_pos:
        if min_pos > max_pos:
            var = max_pos
            max_pos = min_pos
            min_pos = var
        sum_t = sum(arr[min_pos+1:max_pos])

    return locals()

#locals() возвращает словарь вида имя переменной: значение. При этом он в виде размера возвращает ещё и веса словаря и веса кортежей и веса каждого ключа
def get_size(x, level=0, print_res = False):
    if print_res:
        print('\t' * level, f'type {x.__class__}, size={sys.getsizeof(x)}, object= {x}')
    total_size = sys.getsizeof(x)

    if hasattr(x, '__iter__'):
        if hasattr(x, 'items'):
            for xx in x.items():
                total_size += get_size(xx, level + 1)
        elif not isinstance(x, str):
            for xx in x:
                total_size += get_size(xx, level + 1)

    return total_size

#этот метод удаляет общий вес словаря, вес каждого кортежа и вес ключей из общего веса переменных
def get_size_without_dicttrash(obj):
    big_size = get_size(obj)
    for k in obj:
        big_size -= sys.getsizeof(k)
    for tup in obj:
        big_size -= sys.getsizeof(tup)
    return big_size

if __name__ == "__main__":
    all_var1 = var1()
    all_var2 = var2()
    all_var3 = var3()

    print(f'Первый вариант реализации программы через locals(): {get_size(all_var1)} байт')
    print(f'Второй вариант реализации программы через locals(): {get_size(all_var2)} байт')
    print(f'Третий вариант реализации программы через locals(): {get_size(all_var3)} байт')

    print(f'Первый вариант реализации программы без доп объекта для хранения: {get_size_without_dicttrash(all_var1)} байт')
    print(f'Второй вариант реализации программы без доп объекта для хранения: {get_size_without_dicttrash(all_var2)} байт')
    print(f'Третий вариант реализации программы без доп объекта для хранения: {get_size_without_dicttrash(all_var3)} байт')

#разрядность системы 64, версия 3.7.4

#Первый вариант реализации программы через locals(): 2685 байт
#Второй вариант реализации программы через locals(): 2271 байт
#Третий вариант реализации программы через locals(): 1836 байт
#Первый вариант реализации программы без доп объекта для хранения: 1515 байт
#Второй вариант реализации программы без доп объекта для хранения: 1193 байт
#Третий вариант реализации программы без доп объекта для хранения: 1076 байт

#я использлвал ещё модуль memory_profile. Логично, что первый вараинт съел больше памяти, так есть дополнительные переменные.
# 18.273 MiB   18.273 MiB
# 17.637 MiB   17.637 MiB
# 17.421 MiB   17.421 MiB

#выводы достаточно простые, чем меньше исплдьзуешь переменные, тем лучше
#основной вес, конечно, составляет сам анализируемый массив. Его вес занимает примерно одну треть от общего веса программы
#второй компонент веса составляют объекты итераторы в цикле - его надо по максимуму убрать
#сокращение переменных в третьей версии минимальны, по-этому весовая разница минимальны, а значит лучше всего третья версия