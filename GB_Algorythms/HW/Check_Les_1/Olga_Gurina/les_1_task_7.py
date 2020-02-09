# Гурина Ольга
"""
    Задание 7. Определить, является ли год, который ввел пользователь,
    високосным или не високосным.
"""
year = int(input("Введите календарный год: "))
if year % 4 != 0:
    print(f'{year} год не является високосным')
elif year % 100 == 0:
    if year % 400 == 0:
        print(f'{year} год является високосным')
    else:
        print(f'{year} год не является високосным')
else:
    print(f'{year} год является високосным')