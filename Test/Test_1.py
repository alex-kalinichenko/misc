class Solution:
    def longestCommonPrefix(self, strs) -> str:
        strs_len = len(strs)
        i = 0
        result = ''
        for letter in strs[0]:
            print('letter =', letter)

        return result

print(Solution().longestCommonPrefix(["flower","flow","flight"]))
print(Solution().longestCommonPrefix(["dog","racecar","car"]))