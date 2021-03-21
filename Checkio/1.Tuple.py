# for making a tuple
MyTuple = (89,32)
MyTupleWithMoreValues = (1,2,3,4,5,6)

# to concatinate tuples
AnotherTuple = MyTuple + MyTupleWithMoreValues
print(AnotherTuple)

# it should print 89,32,1,2,3,4,5,6

# getting a value from a tuple is similar to a list
firstVal = AnotherTuple[-1]
secondVal = AnotherTuple[-2]
thirdVal = (AnotherTuple[0], AnotherTuple[2], AnotherTuple[-2])
if type(thirdVal) is tuple:  #проверка tuple или нет
    print("Checked: thirdVal is tuple")
else:
    print("thirdVal is not tuple")
# if you have a function called MyTupleFun that returns a tuple,
# you might want to do this
print(firstVal)
print(secondVal)
print(thirdVal)
# or this
# v1,v2 = MyTupleFun()

# вернуть 1-еб 3-е и 2-е с конца значение кортежа (tuple)
tuple1 = (1,2,3,4,5,6)
tuple2 = (tuple1[0], tuple1[2], tuple1[-2])
print(tuple2)

# через функцию
def tup(elements):
    return elements[0], elements[2], elements[-2]
print(tup(1,2,3,4,5,6))




'''
tuple = (1, 2, 3, 4, 5, 6, 7, 9)
def tuple_1(equation):
    for i in len(tuple_1):
    return tuple_1 += tuple_1
print(tuple_1)

>>> tup1 = (1, 2, 3)
>>> del tup1[0]
>>>tup2 = tup1[:2]
>>> print tup2
(1, 2)

def easy_unpack1(easy_unpack):
      #  returns a tuple with 3 elements - first, third and second to the last
    # your code here

    return easy_unpack.append([0], [-1], [-2])

print(easy_unpack1)
#
pritnt(easy_unpack)
'''


def index_power(1,2,3,4: list, n: 5) -> int:
    """
        Find Nth power of the element with index N.
    """
    if N < len(array):
        for i in array

        return array[n - 1] ** n
    else:
        return -1