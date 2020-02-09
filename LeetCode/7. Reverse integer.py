# Given a 32-bit signed integer, reverse digits of an integer.
# Example 1: Input: 123 Output: 321
# Example 2: Input: -123 Output: -321
# Example 3: Input: 120 Output: 21
# Note:
# Assume we are dealing with an environment which could only store integers within
# the 32-bit signed integer range: [−2**31,  2**31 − 1]. For the purpose of this problem,
# assume that your function returns 0 when the reversed integer overflows.

# Time 1 hour 30 min

class Solution:
    def reverse(self, x: int) -> int:
        if str(x).startswith('-'):
            answer = int('-' + str(x).replace('-', '')[::-1])
            return answer if answer > -2**31 else 0
        else:
            answer = int(str(x)[::-1])
            return answer if answer < 2**31 - 1 else 0


print(Solution().reverse(4_294_967_291))
print(Solution().reverse(4295_000_000))
print(Solution().reverse(-123))
print(Solution().reverse(123))
print(Solution().reverse(235))

# Result: Runtime: 44 ms, faster than 7.25% of Python3 online submissions for Reverse Integer.
# Memory Usage: 12.9 MB, less than 100.00% of Python3 online submissions for Reverse Integer.

print()  # ============================================================

class Solution1:
    def reverse(self, x: int) -> int:
        a = ''
        for _ in str(abs(x)):
            a = _ + a
        if x < 0:
            a = '-' + a
        a = int(a)
        return a if -2**31 < a < 2**31 - 1 else 0

print(Solution1().reverse(4_294_967_291))
print(Solution1().reverse(4295_000_000))
print(Solution1().reverse(-123))

# Result: Runtime: 28 ms, faster than 76.61% of Python3 online submissions for Reverse Integer.
# Memory Usage: 12.7 MB, less than 100.00% of Python3 online submissions for Reverse Integer.
