# Given an array of integers, return indices of the two numbers such that they add up
# to a specific target.
# You may assume that each input would have exactly one solution, and you may not use
# the same element twice.
#
# Example:
# Given nums = [2, 7, 11, 15], target = 9,
#
# Because nums[0] + nums[1] = 2 + 7 = 9,
# return [0, 1].

# Start 0:27 Finish 01:16 Time 45 min

class Solution:
    def twoSum(self, nums: list, target: int) -> list:
        for i_1, num1 in enumerate(nums):
            num2 = target - num1
            print('i_1=', i_1, 'num1=', num1, 'num2=', num2)
            for i_2, num3 in enumerate(nums):
                print('i_2=', i_2, 'num3=', num3)
                if num3 == num2 and i_1 != i_2:
                    return [i_1, i_2]


print(Solution().twoSum([2, 7, 11, 15], 26))
print(Solution().twoSum([3, 2, 4], 6))
