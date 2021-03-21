# The Fibonacci numbers, commonly denoted F(n) form a sequence, called the
# Fibonacci sequence, such that each number is the sum of the two preceding
# ones, starting from 0 and 1. That is,
#
# F(0) = 0,   F(1) = 1
# F(N) = F(N - 1) + F(N - 2), for N > 1.
# Given N, calculate F(N).
#
# Example 1: Input: 2 Output: 1 Explanation: F(2) = F(1) + F(0) = 1 + 0 = 1.
# Example 2: Input: 3 Output: 2 Explanation: F(3) = F(2) + F(1) = 1 + 1 = 2.
# Example 3: Input: 4 Output: 3 Explanation: F(4) = F(3) + F(2) = 2 + 1 = 3.
# Note: 0 ≤ N ≤ 30.


class Solution:
    def fib(self, N: int) -> int:
        if N == 0:
            return 0
        elif N == 1:
            return 1
        else:
            fib = 1
            fib_1 = 0
            for _ in range(N - 1):
                fib = fib + fib_1  # новое фиб = пред.фиб + фиб-1
                fib_1 = fib - fib_1  # фиб-1 = новое фиб - пред фиб-1
        return fib


print(Solution().fib(6))

# через рекурсию
def fib_rec(n):
    if n <= 1:
        return 1
    else:
        return fib_rec(n - 1) + fib_rec(n - 2)


print(fib_rec(6))
