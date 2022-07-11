# Дан массив целых чисел и целевое значение
# Необходимо проверить, что складывая несколько чисел массива,
# которые расположены подряд можно получить таргет
# Примеры:
# [1, 3, 4, 3, 28], 7: True т.к. 3 + 4 = 7
# [1, 3, 2, 4, 3, 28], 7: True 4 + 3 = 7
# [1, 3, 2, 3, 28], 7: False т.к. нет суммы рядом стоящих чисел равных 7-ми

# Сложность?
# Как улучшить решение?

def solution(arr, target):
    for idx in range(len(arr)):
        t = 0
        for el in arr[idx:]:
            t += el
            if t > target:
                break
            elif t == target:
                return True
    return False

print(solution([1, 3, 4, 3, 28], 7))
print(solution([1, 3, 2, 4, 3, 28], 7))
print(solution([1, 3, 2, 3, 28], 7))

