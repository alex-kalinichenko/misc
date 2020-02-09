# Determine whether an integer is a palindrome. An integer is a palindrome when it
# reads the same backward as forward.
# Example 1: Input: 121 Output: true
# Example 2: Input: -121 Output: false
# Explanation: From left to right, it reads -121. From right to left, it becomes 121-.
# Therefore it is not a palindrome.
# Example 3: Input: 10 Output: false
# Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
# Follow up: Could you solve it without converting the integer to a string?

# Time 1 hour 20 min

# Runtime: 60 ms, faster than 62.22% of Python3 online submissions for Palindrome Number.
# Memory Usage: 12.7 MB, less than 100.00% of Python3 online submissions for Palindrome Number.

class Solution:
    def isPalindrome(self, x: int) -> bool:
        if x < 0:
            return False
        str_x = str(x)
        length = len(str_x)
        half_length = int(length / 2)
        if length % 2 == 0:
            if str_x[:half_length] == str_x[:half_length - 1:-1]:
                return True
            else:
                return False
        elif str_x[:half_length] == str_x[:half_length:-1]:
            return True
        else:
            return False


print(Solution().isPalindrome(123456791)) # False
print(Solution().isPalindrome(1234554321)) # True
print(Solution().isPalindrome(123454321)) # True
print(Solution().isPalindrome(-123454321)) # False

print()
# Runtime: 40 ms, faster than 99.74% of Python3 online submissions for Palindrome Number.
# Memory Usage: 12.7 MB, less than 100.00% of Python3 online submissions for Palindrome Number.
class Solution1:
    def isPalindrome1(self, x: int) -> bool:
        return str(x) == str(x)[::-1] if x >= 0 else False


print(Solution1().isPalindrome1(123456791)) # False
print(Solution1().isPalindrome1(1234554321)) # True
print(Solution1().isPalindrome1(123454321)) # True
print(Solution1().isPalindrome1(-123454321)) # False
