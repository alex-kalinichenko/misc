'''You are given an array of numbers (floats). You should find the difference
between the maximum and minimum element. Your function should be able to
handle an undefined amount of arguments. For an empty argument list, the
function should return 0.
Floating-point numbers are represented in computer hardware as base 2
(binary) fractions. So we should check the result with ±0.001 precision.
Think about how to work with an arbitrary number of arguments.
Input: An arbitrary number of arguments as numbers (int, float).
Output: The difference between maximum and minimum as a number (int, float).
assert almost_equal(checkio(1, 2, 3), 2, 3), "3-1=2"
assert almost_equal(checkio(5, -5), 10, 3), "5-(-5)=10"
assert almost_equal(checkio(10.2, -2.2, 0, 1.1, 0.5), 12.4, 3), "10.2-(-2.2)=12.4"
assert almost_equal(checkio(), 0, 3), "Empty" '''

def checkio(*args):
    if args == 0:
        return 0
    return max(args) - min(args)
print(checkio(1, 2, 5))

# 2ns method
def checkio1(*args):
    if not args:
        return 0
    return max(args) - min(args)
print(checkio1(1, 2, 5))

# 3nd method
def checkio2(*args):
    return 0 if not args else max(args) - min(args)
print(checkio2(1,2,3,4,5,6))