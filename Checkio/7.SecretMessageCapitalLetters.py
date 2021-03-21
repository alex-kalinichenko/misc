'''You are given a chunk of text. Gather all capital letters in one word in the
order that they appear in the text. For example: text = "How are you? Eh, ok.
Low or Lower? Ohhh.", if we collect all of the capital letters, we get the
message "HELLO".

Input: A text as a string (unicode).
Output: The secret message as a string or an empty string.
Precondition: 0 < len(text) ≤ 1000
all(ch in string.printable for ch in text)'''
# 1-й способ
str = "How are you? Eh, ok. Low or Lower? Ohhh."
message = ""
for i in str:
    if i.isupper():
        message += i
print(message)

# 2-й способ
str = "How are you? Eh, ok. Low or Lower? Ohhh."
message = ""
def find_message(str):
    message = ""
    for i in str:
        if i.isupper():
            message += i
    return message
print(find_message(str))

# 3-й способ
def find_message(str):
    return "".join(i for i in str if i.isupper())
print(find_message(str))