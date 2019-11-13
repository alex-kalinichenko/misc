''' "Fizz buzz" is a word game we will use to teach the robots about division.
Let's learn computers.
You should write a function that will receive a positive integer and return:
"Fizz Buzz" if the number is divisible by 3 and by 5;
"Fizz" if the number is divisible by 3;
"Buzz" if the number is divisible by 5;
The number as a string for other cases.
Input: A number as an integer.
Output: The answer as a string.'''

def checkio(number):
    divisible = 0
    output = ""
    if number % 3 == 0:
        divisible += 1
    if number % 5 == 0:
        divisible += 2
    if divisible == 3:
        output = "Fizz Buzz"
    if divisible == 2:
        output = "Buzz"
    if divisible == 1:
        output = "Fizz"
    if divisible == 0:
        output = str(number)
    return output
print(checkio(4))