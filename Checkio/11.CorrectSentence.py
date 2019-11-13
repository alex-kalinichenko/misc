'''For the input of your function, you will be given one sentence. You have to
return a corrected version, that starts with a capital letter and ends with
a period (dot).
Pay attention to the fact that not all of the fixes are necessary. If a
sentence already ends with a period (dot), then adding another one will
be a mistake.
Examples
"greetings, friends" == "Greetings, friends."
"Greetings, friends" == "Greetings, friends."
"Greetings, friends." == "Greetings, friends."
"hi") == "Hi."
"welcome to New York" == "Welcome to New York."

Input: A string.
Output: A string.'''

text = "welcome to New York"

def correct_sentence(text):
    text = text[0].upper() + text[1:]
    if text[-1] == ".":
        return text
    else:
        return text + "."
    return text
print(correct_sentence(text))


# 2nd variant
def correct_sentence(text: str) -> str:
    return text[0].upper() + text[1:] + "." if not text.endswith(".") else text
print(correct_sentence(text))