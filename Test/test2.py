
friend = {'name': 'Max',
          'age': 23,
          'has_car': True }

# перебор по ключам
# for key in friend.keys():
#     print(key)
#     print(friend[key])

print(friend["age"])

# перебор пар в виде кортежа, но кортеж распадётся на 2 переменные key и val
# for key, val in friend.items():
#     print(key)
#     print(val)

worker_dict = {"ivan_petrov": {"wage": 100000, "bonus": 50000},
               "petr_ivanov": {"wage": 200000, "bonus": 50000},
               "ivan_sidorov": {"wage": 300000, "bonus": 50000} }

def get_salary(worker_name):
    return worker_dict[worker_name]

print(get_salary("petr_ivanov"))

print(type("ghbdtn"))
