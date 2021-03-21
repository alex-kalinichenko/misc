'''The array (a tuple) has various numbers. You should sort it, but sort it by absolute
value in ascending order. For example, the sequence (-20, -5, 10, 15) will be sorted
like so: (-5, 10, 15, -20). Your function should return the sorted list or tuple.
Precondition: The numbers in the array are unique by their absolute values.
Input: An array of numbers , a tuple..
Output: The list or tuple (but not a generator) sorted by absolute values in ascending order.
Addition: The results of your function will be shown as a list in the tests explanation panel.
Example:
checkio((-20, -5, 10, 15)) == [-5, 10, 15, -20] # or (-5, 10, 15, -20)
checkio((1, 2, 3, 0)) == [0, 1, 2, 3]
checkio((-1, -2, -3, 0)) == [0, -1, -2, -3]
How it is used: Sorting is a part of many tasks,
so it will be useful to know how to use it.
Precondition: len(set(abs(x) for x in array)) == len(array)
0 < len(array) < 100
all(isinstance(x, int) for x in array)
all(-100 < x < 100 for x in array)'''

numbers_array = (-20, -5, 10, 15)


def checkio(numbers_array: tuple) -> list:
#    numbers_array = list(numbers_array)
    return sorted(numbers_array, key=abs)  # list.sort() работает только с листами
                                           # sort() works with any iterable

print(checkio(numbers_array))



#sort by last digit for numbers from 10 to 99 only
#sorted([11, 20, 54, 73], key=lambda x: str(x)[1]) == [20, 11, 73, 54]

#sort lists by sums
#sorted([[90, 11], [99, 1], [200], [30, 50, 50]], key=sum) == [[99, 1], [90, 11], [30, 50, 50], [200]]