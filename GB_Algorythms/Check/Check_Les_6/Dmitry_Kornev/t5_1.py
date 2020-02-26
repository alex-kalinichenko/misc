# Пользователь вводит данные о количестве предприятий, их наименования и прибыль за четыре квартала
# для каждого предприятия. Программа должна определить среднюю прибыль (за год для всех предприятий)
# и отдельно вывести наименования предприятий, чья прибыль выше среднего и ниже среднего.


from collections import namedtuple

n = int(input('Введите количество предприятий: '))

enteprices=namedtuple('enteprices', 'name profit_for_quart')

firm = []
total_profit = 0

for i in range(1,n+1):
    profit_for_quart =[]
    name = input(f'Введите название предприятия {i}: ')
    for j in range(1,5):
        profit_for_quart.append(float(input(f'Введите прибыль за  квартал {j}: ')))
    enteprice = enteprices(name = name, profit_for_quart = profit_for_quart)
    firm.append(enteprice)
    total_profit += sum(enteprice.profit_for_quart)
print(f'Средняя прибыль за год : {total_profit/n}')

print('Предприятия со средней прибылью выше среднего:')

for enteprice in firm:
    if sum(enteprice.profit_for_quart) >= total_profit/n:
        print(enteprice.name)

print('Предприятия со средней прибылью ниже среднего:')

for enteprice in firm:
    if sum(enteprice.profit_for_quart) < total_profit/n:
        print(enteprice.name)

