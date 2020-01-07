# Write a function to find the longest common prefix string amongst an array of strings.
# If there is no common prefix, return an empty string "".
# Example 1: Input: ["flower","flow","flight"] Output: "fl"
# Example 2: Input: ["dog","racecar","car"] Output: ""
# Explanation: There is no common prefix among the input strings.
# Note: All given inputs are in lowercase letters a-z.

# Start 19:00

class Solution:
    def longestCommonPrefix(self, strs) -> str:
        strs_len = len(strs)
        i = 0
        result = ''
        for letter in strs[0]:
            """ буква  i-е слово """
            print('letter =', letter)
            for word in strs:
                """слово  лист слов """
                print('word =', word)
                print('word[i] =', word[i])
                if letter != word[i]:
                    return ""

            result += letter
            print('result =', result)
            i += 1
        return result

print(Solution().longestCommonPrefix(["flower","flow","flight"]))
print(Solution().longestCommonPrefix(["dog","racecar","car"]))
