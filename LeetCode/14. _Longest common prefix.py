# Write a function to find the longest common prefix string amongst an array of strings.
# If there is no common prefix, return an empty string "".
# Example 1: Input: ["flower","flow","flight"] Output: "fl"
# Example 2: Input: ["dog","racecar","car"] Output: ""
# Explanation: There is no common prefix among the input strings.
# Note: All given inputs are in lowercase letters a-z.

# Time: 2 hours. Not finished


class Solution:
    def longestCommonPrefix(self, strs) -> str:
        min_letter_no = len(strs[0])
        for word in strs:
            if len(word) < min_letter_no:
                min_letter_no = len(word)
        print('min_letter_no =', min_letter_no)
        # ####
        word_no = len(strs)
        print('word_no=', word_no)


        letter_pos = 0
        letter_no = 0
        word_no = 0
        result = ''
        for letter in strs[word_no][letter_no]:
            print(letter)
            for word in strs[word_no]:
                if letter == strs[1][letter_pos]:
                    print(letter, 'right!')
                    letter_pos += 1
                word_no += 1
            letter_no += 1
        return ''


print(Solution().longestCommonPrefix(["flower", "flow", "flight"]))
print(Solution().longestCommonPrefix(["dog", "racecar", "car"]))
