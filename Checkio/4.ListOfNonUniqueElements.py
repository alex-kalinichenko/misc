#Some hints
#You can use list.count(element) method for counting.
#Create new list with non-unique elements
#Loop over original list


list = [1,2,3,3,4,5,5,6]  # 8 elements
non_uniq_list = []
for i in list:
    if list.count(i) > 1:
        non_uniq_list.append(i)
print(non_uniq_list)


# через функцию
list = [1,2,3,3,4,5,5,6]  # 8 elements
non_uniq_list = []
def checkio(data: list):
    for n in list:  # get N-ое
        print(n) # проверка что сидит в переменной n
        if list.count(n) > 1: # если кол-во переменной n больше чеи 1, то
            non_uniq_list.append(n) # добавить это значение в новый лист
    return non_uniq_list
print(checkio(list))
