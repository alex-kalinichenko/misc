# Given a string s containing just the characters '(', ')', '{', '}', '[' and ']',
# determine if the input string is valid.
# An input string is valid if:
# Open brackets must be closed by the same type of brackets.
# Open brackets must be closed in the correct order.

# Constraints:
# 1 <= s.length <= 10^4
# s consists of parentheses only '()[]{}'.

class Solution:
    def isValid(self, s: str) -> bool:
        brackets_dict = {'(': ')',
                         '[': ']',
                         '{': '}',
                         }
        brackets_dict_ = {')': '(',
                          ']': '[',
                          '}': '{',
                         }
        if len(s) % 2 == 1:
            return False
        else:
            lifo = []
            for char in s:
                if char in brackets_dict.keys():
                    lifo.append(char)
                else:
                    if lifo and brackets_dict_[char] == lifo[-1]:
                        lifo.pop(-1)
                    else:
                        return False
            
            return False if lifo else True


assert Solution().isValid("()") == True, 'should be True'
assert Solution().isValid("()[]{}") == True, 'should be True'
assert Solution().isValid("{[]}") == True, 'should be True'


assert Solution().isValid("()") == True, 'True'
assert Solution().isValid("())") == False, 'False'
assert Solution().isValid("((") == False, 'False'
assert Solution().isValid("(]") == False, 'should be False'
assert Solution().isValid("([)]") == False, 'should be False'
assert Solution().isValid("([)]]") == False, 'should be False'
assert Solution().isValid("){") == False, 'should be False'
