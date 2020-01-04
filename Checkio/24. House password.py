# Stephan and Sophia forget about security and use simple passwords for everything.
# Help Nikola develop a password security check module. The password will be
# considered strong enough if its length is greater than or equal to 10 symbols,
# it has at least one digit, as well as containing one uppercase letter and one
# lowercase letter in it. The password contains only ASCII latin letters or digits.
# Input: A password as a string.
# Output: Is the password safe or not as a boolean or any data type that can be
# converted and processed as a boolean. In the results you will see the converted
# results.
# Example:
# checkio('A1213pokl') == False
# checkio('bAse730onE') == True
# checkio('asasasasasasasaas') == False
# checkio('QWERTYqwerty') == False
# checkio('123456123456') == False
# checkio('QwErTy911poqqqq') == True

# How it is used: If you are worried about the security of your app or service,
# you can check your users' passwords for complexity. You can use these skills
# to require that your users passwords meet more conditions (punctuations or unicode)

# Precondition:
# re.match("[a-zA-Z0-9]+", password)
# 0 < len(password) ≤ 64

# 40 min password check
import re


def checkio(data: str) -> bool:
    low_flag = False
    digit_flag = False
    upper_flag = False
    len_flag = False
    for el in data:
        low_flag = True if low_flag or el.islower() else False
        digit_flag = True if digit_flag or el.isdigit() else False
        upper_flag = True if upper_flag or el.isupper() else False
    if len(data) >= 10:
        len_flag = True
    return True if len_flag and low_flag and digit_flag and upper_flag else False


print(checkio('QWERTYqwerty'))


# другой способ ===============================================
def checkio_1(data: str) -> bool:
    if len(data) < 10:
        return False
    if not any(i.isdigit() for i in data):
        return False
    if not any(i.isupper() for i in data):
        return False
    if not any(i.islower() for i in data):
        return False
    return True


print(checkio_1('123456123456'))

if __name__ == '__main__':
    # These "asserts" using only for self-checking and not necessary for auto-testing
    assert checkio('A1213pokl') == False, "1st example"
    assert checkio('bAse730onE4') == True, "2nd example"
    assert checkio('asasasasasasasaas') == False, "3rd example"
    assert checkio('QWERTYqwerty') == False, "4th example"
    assert checkio('123456123456') == False, "5th example"
    assert checkio('QwErTy911poqqqq') == True, "6th example"
    print("Coding complete? Click 'Check' to review your tests and earn cool rewards!")
