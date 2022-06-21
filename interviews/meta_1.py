# Дана строка из сбукв в нижнем регистре. Нужно проверить можно ли сделать из неё полиндром,
# выбросив не более одного символа
# Examples:
# madams -> true: madamS - madam
# rostator -> true: roStator - rotator
# rosstator -> false: roSStator
# kayaks -> true: kayakS - kayak
# aaabbb -> false

# Какова сложность алгоритма? O(n^2) т.к. кроме итерации по символам делаем разворот строки
# Как его можно улучшить?

def solution(s):
    for idx in range(len(s)):
        s_ = s[:idx] + s[idx+1:]
        if s_ == s_[::-1]:
            return s, True
    return s, False

print(solution('madams'))
print(solution('rostator'))
print(solution('rosstator'))
print(solution('kayaks'))
print(solution('aaabbb'))
