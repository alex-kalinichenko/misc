'''You are given an array of integers. You should find the sum of the integers
with even indexes (0th, 2nd, 4th...). Then multiply this summed number and the
final element of the array together. Don't forget that the first element has ' \
an index of 0.
For an empty array, the result will always be 0 (zero).

Input: A list of integers.
Output: The number as an integer.
How it is used: Indexes and slices are important elements of coding. This will
come in handy down the road!'''
array = []
def checkio(array):
    if array:  # if len(array) > 0:
        num = 0
        for i in range(0, len(array), 2): # от 1-го до последнего, каждое 2-е число. Ещё можно так: array[::2]
            num += array[i]
        num *= array[-1]
    elif array == []:
        num = 0
    elif len(array) == 1:
        num = int(array[0])
        num *= num
    return num
print(checkio(array))

# 2 способ
array = [0, 1, 2, 3, 4, 5]
def checkio(array):
    if not array:  # если
        return 0
    add_array = array[::2]
    multiplier = array[-1]
    result = (sum(add_array)) * multiplier
    return result
print(checkio(array))

# 3 способ
array = [0, 1, 2, 3, 4, 5]
def checkio(array):
    if len(array) == 0: return 0
    return sum(array[0::2]) * array[-1]
print(checkio(array))