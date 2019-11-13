'''You are given a sequence of strings. You should join these strings into chunk of
text where the initial strings are separated by commas. As a joke on the right
handed robots, you should replace all cases of the words "right" with the word
"left", even if it's a part of another word. All strings are given in lowercase.

Input: A sequence of strings as a tuple of strings(unicode).
Output: The text as a string.

Example:
left_join(("left", "right", "left", "stop")) == "left,left,left,stop"
left_join(("bright aright", "ok")) == "bleft aleft,ok"
left_join(("brightness wright",)) == "bleftness wleft"
left_join(("enough", "jokes")) == "enough,jokes"  '''

phrases = ("left", "right", "left", "stop")
#phrases = ("bright aright", "ok")
#phrases = ("brightness wright",)
#phrases = ("enough", "jokes")

def left_join(phrases):
    str1 = ""
    for i in phrases:
        str1 += i + ","
    return str1[0:-1].replace("right", "left") # delete last comma then replace
print(left_join(phrases))

# 2nd solution
def left_join(phrases):
    return ",".join(phrases).replace("right", "left")
print(left_join(phrases))