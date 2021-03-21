# https://leetcode.com/problems/check-if-it-is-a-straight-line/submissions/
# You are given an array coordinates, coordinates[i] = [x, y], where [x, y] represents
# the coordinate of a point. Check if these points make a straight line in the XY plane.

# Input: coordinates = [[1,2],[2,3],[3,4],[4,5],[5,6],[6,7]]
# Output: true

# Input: coordinates = [[1,1],[2,2],[3,4],[4,5],[5,6],[7,7]]
# Output: false
#
# Constraints:
# 2 <= coordinates.length <= 1000
# coordinates[i].length == 2
# -10^4 <= coordinates[i][0], coordinates[i][1] <= 10^4
# coordinates contains no duplicate point.

# Start 01:45 stop 2:10
# Start 19:10 stop 19:24 Time 40 min


class Solution:
    def checkStraightLine(self, coordinates) -> bool:
        check_i = 0
        x1 = coordinates[check_i][0]
        y1 = coordinates[check_i][1]
        x2 = coordinates[check_i + 1][0]
        y2 = coordinates[check_i + 1][1]
        for _ in range(len(coordinates)):
            if x1 == x2 and _ < len(coordinates):
                check_i += 1
                x1 = coordinates[check_i][0]
                x2 = coordinates[check_i + 1][0]
            elif _ == len(coordinates):
                return False
            else:
                break
        x1 = coordinates[check_i][0]
        y1 = coordinates[check_i][1]
        x2 = coordinates[check_i + 1][0]
        y2 = coordinates[check_i + 1][1]
        k = (y2 - y1) / (x2 - x1)
        b = y2 - k * x2
        for x, y in coordinates:
            if y != k * x + b:
                return False
        return True


print(Solution().checkStraightLine([[1, 1], [2, 2], [3, 4], [4, 5], [5, 6], [7, 7]]))
print(Solution().checkStraightLine([[1, 3], [2, 5], [3, 7], [4, 9], [5, 11]]))
print(Solution().checkStraightLine([[2, 3], [2, 5], [3, 7], [3, 9], [5, 11]]))

