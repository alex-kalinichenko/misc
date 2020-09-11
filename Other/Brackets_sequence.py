# Write python code for verifying that brackets sequence is correct. E.g.: {[(}]) incorrect, {()[]} correct

def bracket_seq(sequence):
    left_list = ["[", "{", "("]
    right_list = ["]", "}", ")"]
    stack = []
    for s in sequence:
        if s in left_list:
            stack.append(s)
        elif s in right_list:
            pos = right_list.index(s)
            if (len(stack) > 0) and (left_list[pos] == stack[len(stack) - 1]):
                stack.pop()
            else:
                return "Incorrect"
    if len(stack) == 0:
        return "Correct"
    else:
        return "Incorrect"


print(bracket_seq("{[(}])"))
print(bracket_seq("{()[]}"))
