class Mammal:
    def move(self):
        print('Двигается')


class Hare(Mammal):
    def move(self):
        print('Прыгает')


animal = Mammal()
animal.move()  # Двигается
hare = Hare()
hare.move()  # Прыгает

print("=============")


class Person:
    def say_hi(self):
        print('Привет! Как дела?')


p = Person()
p.say_hi()

print("=============")


class Person:
    def __init__(self, name):
        self.name = name

    def say_hi(self):
        print('Привет! Меня зовут', self.name)


p = Person('Swaroop')
p.say_hi()

print("=============")


class Robot:
    """Представляет робота с именем."""
    # Переменная класса, содержащая количество роботов
    population = 0

    def __init__(self, name):
        """Инициализация данных."""
        self.name = name
        """Переменная name принадлежит объекту (ей присваивается значение
         при помощи self), и поэтому является переменной объекта"""
        print('(Инициализация {0})'.format(self.name))
        # При создании этой личности, робот добавляется к переменной 'population'
        Robot.population += 1
        """мы обращаемся к переменной класса population как Robot.population, а не
        self.population. К переменной же объекта name во всех методах этого объекта
        мы обращаемся при помощи обозначения self.name. Помните об этой простой разнице
        между переменными класса и объекта. Также имейте в виду, что переменная объекта
        с тем же именем, что и переменная класса, сделает недоступной («спрячет»)
        переменную класса!"""
    def __del__(self):
        """Я умираю."""
        print('{0} уничтожается!'.format(self.name))
        Robot.population -= 1
        if Robot.population == 0:
            print('{0} был последним.'.format(self.name))
        else:
            print('Осталось {0:d} работающих роботов.'.format(Robot.population))

    def sayHi(self):
        """Приветствие робота. Да, они это могут."""
        print('Приветствую! Мои хозяева называют меня {0}.'.format(self.name))

    def howMany():
        """Выводит численность роботов."""
        print('У нас {0:d} роботов.'.format(Robot.population))

    howMany = staticmethod(howMany)
    """Метод howMany принадлежит классу, а не объекту. Это означает, что мы можем
    определить его как classmethod или staticmethod, в зависимости от того, нужно
    ли нам знать, в каком классе мы находимся. Поскольку нам не нужна такая
    информация, мы воспользуемся staticmethod
    Мы могли достичь того же самого, используя декораторы:
    
    @staticmethod
    def howMany():
        '''Выводит численность роботов.'''
        print('У нас {0:d} роботов.'.format(Robot.population))
           
    Декораторы можно считать неким упрощённым способом вызова явного оператора """

droid1 = Robot('R2-D2')
droid1.sayHi()
Robot.howMany()

droid2 = Robot('C-3PO')
droid2.sayHi()
Robot.howMany()

print("\nЗдесь роботы могут проделать какую-то работу.\n")

print("Роботы закончили свою работу. Давайте уничтожим их.")
del droid1
del droid2
Robot.howMany()
