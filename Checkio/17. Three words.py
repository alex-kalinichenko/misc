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
    count = 0
    for i in range(0, len(word_list)):
        if word_list[i].isalpha():  # if word_list[i].isalpha() == True:
            count += 1
        else:
            count = 0
        print("No of i:", i, ",", word_list[i], "Count:", count) # debug
        if count == 3:
            return True
    return False


print(checkio("He is 12 key long feet 123 man"))