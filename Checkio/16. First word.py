'''You are given a string where you have to find its first word.
This is a simplified version of the First Word mission.
Input string consists of only english letters and spaces.
There aren’t any spaces at the beginning and the end of the string.
Input: A string.
Output: A string.'''

# =============================  simplified ================================
def first_word(text: str) -> str:
    # returns the first word in a given text.
    list = []
    list = text.split()
    return list[0]
print(first_word("Hello world"))

# 2nd way
def first_word(text: str) -> str:
    # returns the first word in a given text.
    return text if text.find(" ") < 0 else text[0: text.find(" ")]
print(first_word("Hello"))

#return 0 if not args else max(args) - min(args)

def first_word(text: str) -> str:
    return text.split(' ')[0]
print(first_word("Hello world"))
print()
# ==========================================================================
'''You are given a string where you have to find its first word.
When solving a task pay attention to the following points:
There can be dots and commas in a string.
A string can start with a letter or, for example, a dot or space.
A word can contain an apostrophe and it's a part of a word.
The whole text can be represented with one word and that's it.
Input: A string.
Output: A string.
Precondition: the text can contain a-z A-Z , .
assert first_word("Hello world") == "Hello"
assert first_word(" a word ") == "a"
assert first_word("don't touch it") == "don't"
assert first_word("greetings, friends") == "greetings"
assert first_word("... and so on ...") == "and"
assert first_word("hi") == "hi"
assert first_word("Hello.World") == "Hello"     '''

def first_word(text: str) -> str:
    # returns the first word in a given text
    text = text.replace(".", " ").replace(",", " ")
    word_list = text.split()
    for i in word_list:
        return i
print(first_word("don't touch it"))

# 2nd way
import re
from string import punctuation, whitespace
def first_word(text: str) -> str:
    return re.split('[^a-zA-Z\']', text.strip(punctuation + whitespace))[0]
print(first_word("don't touch it"))