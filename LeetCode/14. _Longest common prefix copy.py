# Write a function to find the longest common prefix string amongst an array of strings.
# If there is no common prefix, return an empty string "".
# Example 1: Input: ["flower","flow","flight"] Output: "fl"
# Example 2: Input: ["dog","racecar","car"] Output: ""
# Explanation: There is no common prefix among the input strings.
# Note: All given inputs are in lowercase letters a-z.

# Time: 2 hours. Not finished

class Solution:
    def longestCommonPrefix(self, strs) -> str:
        strs_len = len(strs)
        i = 1
        result = ''

        for letter in strs[0]:  # from first word
            print('letter =', letter)
            prefix_flag = True
            for let in strs[i:-1]:
                print('let =', let)
                print('word[i] =', strs[i])
                if letter != let:
                    prefix_flag = False
                    print('Prefix flag = False')
                    continue
                if prefix_flag:
                    result += letter
                print('result =', result)
            print('result =', result)
            i += 1
        return result


print(Solution().longestCommonPrefix(["flower", "flow", "flight"]))
print('=' * 10)
print(Solution().longestCommonPrefix(["dog", "racecar", "car"]))
