'''
Написать программу, которая генерирует в указанных пользователем границах:
a. случайное целое число,
b. случайное вещественное число,
c. случайный символ.
'''
import random

user = input(
    "Выберите тип генератора\na. случайное целое число,\nb. случайное вещественное число,\nc. случайный символ.:\n")

if user == "a":
    try:
        diap_low = int(input("Введите целочисленую нижнюю границу: "))
        diap_hight = int(input("Введите целочисленую верхнюю границу: "))
        if diap_hight < diap_low: diap_hight, diap_low = diap_low, diap_hight
        print(random.randint(diap_low, diap_hight))
    except:
        print("Надо было вводить число")
elif user == "b":
    diap_low = float(input("Введите вещественную нижнюю границу: "))
    diap_hight = float(input("Введите вещественную верхнюю границу: "))
    if diap_hight < diap_low: diap_hight, diap_low = diap_low, diap_hight
    print(random.uniform(diap_low, diap_hight))
elif user == "c":
    diap_low = ord(input("Введите символ с которого начать: "))
    diap_hight = ord(input("Введите сивол которым закончить: "))
    if diap_hight < diap_low: diap_hight, diap_low = diap_low, diap_hight
    print(chr(random.randint(diap_low, diap_hight)))
else:
    print("Выбран не корректный тип генератора")
