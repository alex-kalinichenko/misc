# arabic numbers => roman numbers

# Roman numerals come from the ancient Roman numbering system. They are based on
# specific letters of the alphabet which are combined to signify the sum (or, in
# some cases, the difference) of their values. The first ten Roman numerals are:
# I, II, III, IV, V, VI, VII, VIII, IX, and X.
#
# The Roman numeral system is decimal based but not directly positional and does
# not include a zero. Roman numerals are based on combinations of these seven symbols:
#
# Numeral	Value
# I	1 (unus)
# V	5 (quinque)
# X	10 (decem)
# L	50 (quinquaginta)
# C	100 (centum)
# D	500 (quingenti)
# M	1,000 (mille)
# More additional information about roman numerals can be found on the Wikipedia article.
#
# For this task, you should return a roman numeral using the specified integer value
# ranging from 1 to 3999.
# Input: A number as an integer.
# Output: The Roman numeral as a string.
# How it is used: This is an educational task that allows you to explore different
# numbering systems. Since roman numerals are often used in the typography, it can
# alternatively be used for text generation. The year of construction on building faces
# and cornerstones is most often written by Roman numerals. These numerals have man
# y other uses in the modern world and you read about it here... Or maybe you will have
# a customer from Ancient Rome ;-)
# Precondition: 0 < number < 4000

def arabic_to_roman(data):
    result = ''
    for arabic, roman in zip((1000, 900, 500, 400, 100, 90, 50,  40, 10,  9,   5,  4,  1),
                              ('M','CM', 'D', 'CD','C','XC','L','XL','X','IX','V','IV','I')):
        result += data // arabic * roman
        data %= arabic
    return result


if __name__ == '__main__':
    #These "asserts" using only for self-checking and not necessary for auto-testing
    assert arabic_to_roman(6) == 'VI', '6'
    assert arabic_to_roman(76) == 'LXXVI', '76'
    assert arabic_to_roman(499) == 'CDXCIX', '499'
    assert arabic_to_roman(3888) == 'MMMDCCCLXXXVIII', '3888'
    print('Done! Go Check!')