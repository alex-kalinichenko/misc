# Write a function that reverses a string. The input string is given as an array of
# characters char[].
# Do not allocate extra space for another array, you must do this by modifying the
# input array in-place with O(1) extra memory.
# You may assume all the characters consist of printable ascii characters.

# Example 1: Input: ["h","e","l","l","o"] Output: ["o","l","l","e","h"]
# Example 2: Input: ["H","a","n","n","a","h"] Output: ["h","a","n","n","a","H"]


class Solution:
    def reverseString(self, s) -> None:
        """
        Do not return anything, modify s in-place instead.
        """
        s[:] = s[::-1] # Runtime: 212 ms, faster than 70.40% Memory: 17.5 MB, less than 88.37%
        s.reverse() # Runtime: 212 ms, faster than 70.40%. Memory: 17.3 MB, less than 97.67%
        print(s)


print(Solution().reverseString(["h","e","l","l","o"]))

print(5 * '=')
s= ["h","e","l","l","o"]
print(s[::-1])

