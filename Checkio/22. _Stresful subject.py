# Sofia has had a very stressful month and decided to take a vacation for a week. To avoid any
# stress during her vacation she wants to forward emails with a stressful subject line to Stephen.
# The function should recognise if a subject line is stressful. A stressful subject line means
# that all letters are in uppercase, and/or ends by at least 3 exclamation marks, and/or contains
# at least one of the following “red” words: "help", "asap", "urgent". Any of those "red" words
# can be spelled in different ways - "HELP", "help", "HeLp", "H!E!L!P!", "H-E-L-P", even in a very
# loooong way "HHHEEEEEEEEELLP," they just can't have any other letters interspersed between them.
#
# Input: Subject line as a string.
# Output: Boolean.
#
# Example:
# is_stressful("Hi") == False
# is_stressful("I neeed HELP") == True
# Precondition: Subject can be up to 100 letters

# делал 2 часа - приостановил не завершив

def is_stressful(subj):
    red_words = ['help', 'asap', 'urgent']
    for wred_word in red_words:
        if red_words in subj.lower():

        return True


print(is_stressful("I neeed HELP"))
print(is_stressful("Hi"))

if __name__ == '__main__':
    #These "asserts" are only for self-checking and not necessarily for auto-testing
    assert is_stressful("Hi") == False, "First"
    assert is_stressful("I neeed HELP") == True, "Second"
    print('Done! Go Check it!')

