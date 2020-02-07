from collections import namedtuple

Plant = namedtuple('plant', 'name avg')
plant_list = []

n = int(input('Введите количество элементов в списке предприятий (проверка на дурака отсутсвует): '))

sum_avg = 0.0
for i in range(n):
  print(f'Заполните данные по предприятию №{i}')
  name = input('Введите название предприятия: ')
  fst = int(input('Введите прибыль за первый квартал: '))
  scnd = int(input('Введите прибыль за второй квартал: '))
  thrd = int(input('Введите прибыль за третий квартал: '))
  frth = int(input('Введите прибыль за четвертый квартал: '))
  plant_list.append(Plant(name,((fst+scnd+thrd+frth)/4)))
  sum_avg = sum_avg + (fst+scnd+thrd+frth)/4

plant_avg = sum_avg/n
print(f'Среднее для всех предриятий  {plant_avg}')

plant_less_than_avg = []
plant_more_than_avg = []

for item in plant_list:
  if item.avg > plant_avg:
    plant_more_than_avg.append(item.name)
  elif item.avg < plant_avg:
    plant_less_than_avg.append(item.name)

print(f'Прибыль выше среднего на: {plant_more_than_avg}')
print(f'Прибыль ниже среднего на: {plant_less_than_avg}')