'''You are given a string with words and numbers separated by whitespaces (one space).
The words contains only letters. You should check if the string contains three
words in succession. For example, the string "start 5 one two three 7 end"
contains three words in succession.
Input: A string with words.
Output: The answer as a boolean.

checkio("Hello World hello") == True
checkio("He is 123 man") == False
checkio("1 2 3 4") == False
checkio("bla bla bla bla") == True
checkio("Hi") == False                    '''

def checkio(words: str) -> bool:
    # check if succession of 3 words occurs
    word_list = words.split()
    print(word_list)
    new_word_list = []
    for i in word_list:
        print(i)
        if i == i.isalpha():
            new_word_list = word_list.append(i)
    return new_word_list
print(checkio("Hello World hello"))