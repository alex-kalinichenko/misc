# 1. Пользователь вводит данные о количестве предприятий, их наименования и
# прибыль за 4 квартала (т.е. 4 отдельных числа) для каждого предприятия.
# Программа должна определить среднюю прибыль (за год для всех предприятий) и
# вывести наименования предприятий, чья прибыль выше среднего и отдельно вывести
# наименования предприятий, чья прибыль ниже среднего.
# Примечание: для решения задач попробуйте применить какую-нибудь коллекцию из
# модуля collections
#

import collections
import random


def sum_tuple(numbers):


    total_sum = 0
    for sum_q in numbers:
        total_sum += sum_q
        return total_sum


Сompany = collections.namedtuple('Company', ['q1', 'q2', 'q3', 'q4'])

base_company = {}

n = int(input("Количество предприятий: "))

for i in range(n):
    name = input(str(i+1) + '-е предприятие: ')
    income_q1 = int(input('Прибыль за 1-й квартал: '))
    income_q2 = int(input('Прибыль за 2-й квартал: '))
    income_q3 = int(input('Прибыль за 3-й квартал: '))
    income_q4 = int(input('Прибыль за 4-й квартал: '))
    base_company[name] = Сompany(
        q1=income_q1, q2=income_q2, q3=income_q3, q4=income_q4)

total_income = ()

for name, income in base_company.items():
    print(f'Предприятие: {name} прибыль за год - {sum(income)}')
    total_income += income

avg_income_total = sum(total_income) / n
print(f'Средняя прибыль за год для всех предприятий {avg_income_total}')

print('Предприятия, у которых прибыль выше среднего:')

for name, income in base_company.items():
    if sum(income) > avg_income_total:
        print(f'{name} - {sum(income)}')

print('Предприятия, у которых прибыль ниже среднего:')

for name, income in base_company.items():
    if sum(income) < avg_income_total:
        print(f'{name} - {sum(income)}')