# Определить, какое число в массиве встречается чаще всего.
# 3.7.4 (tags/v3.7.4:e09359112e, Jul  8 2019, 20:34:20) [MSC v.1916 64 bit (AMD64)] win32
# Задача решена на основе массива типа list, tuple и counter. Декоратор profile показывает,
# что изменение потребляемой памяти в течение кода происходит несущественно, и практически
# все потребление памяти, таким образом, приходится на массив, что, впрочем, и так очевидно.
# функция sys.getsizeof() показывает, что массив из tuple требует немного меньше паямяти (8048),
#чем массив из list(9024). При этом массив из counter (384) многократно экономичнее list и tuple
#за счет группировки.
# Для анализа изменения массива в динамике можно, например, создать класс, в котором будет метод,
# записывающий при определенных операциях информацию по состоянию памяти переменных класса в
#(массив). Таким образом, интересующие переменные относятся к этому классу, и получается трассировка изменения
# памяти при изменении параметров функции. В данном случае мы можем наблюдать, что изменение диапозана приводит
# к кратному увеличению памяти под counter и не влияет на list и tuple. И наооборот, изменение объема выборки,
# кратно увеличивает память под list и tuple и не влияет на counter, что логично.


import sys
from random import randint
from collections import Counter
from memory_profiler import profile


#@profile(precision=4)
def num_in_list():
    A = [randint(0, 9) for _ in range(1000)]
    Amax = 0
    Kmax = 0

    for i in range(len(A)):
        a = 0
        k = 0
        for j in range(len(A)):
            if A[i] == A[j] :
                k += 1
        if k >= Kmax:
            Kmax = k
            Amax = A[i]
    print(f'Number: {Amax}, Repetitions: {Kmax} ' )
    print(sys.getsizeof(A))




#@profile(precision=4)
def num_in_tuple():
    A = tuple(randint(0, 9) for _ in range(1000))
    Amax = 0
    Kmax = 0
    for i in range(len(A)):
        a = 0
        k = 0
        for j in range(len(A)):
            if A[i] == A[j]:
                k += 1
        if k >= Kmax:
            Kmax = k
            Amax = A[i]
    print(f'Number: {Amax}, Repetitions: {Kmax} ')
    print(sys.getsizeof(A))



#@profile(precision=4)
def num_in_count():
    A = Counter(randint(0, 9) for _ in range(1000))
    print(f'Number: {A.most_common(1)[0][0]}, Repetitions: {A.most_common(1)[0][1]} ')
    print(sys.getsizeof(A))



if __name__== '__main__':

    num_in_list()

    num_in_tuple()

    num_in_count()



######################################################################

    size = []
class size_mesured:

    def __init__(self, name):
        self.name = name

    def update_data(self, data):
        self.data = data
        size.append(f'[{self.name}, {sys.getsizeof(self.data)}]')

A1 = size_mesured('A1')
A2 = size_mesured('A2')
A3 = size_mesured('A3')

A1.update_data([randint(0, 9) for _ in range(1000)])
A1.update_data([randint(0, 9) for _ in range(10000)])
A1.update_data([randint(0, 9) for _ in range(100000)])

A2.update_data(tuple(randint(0, 9) for _ in range(1000)))
A2.update_data(tuple(randint(0, 9) for _ in range(10000)))
A2.update_data(tuple(randint(0, 9) for _ in range(100000)))


A3.update_data(Counter([randint(0, 1000) for _ in range(1000)]))
A3.update_data(Counter([randint(0, 9) for _ in range(10000)]))
A3.update_data(Counter([randint(0, 9) for _ in range(100000)]))

print(size)


