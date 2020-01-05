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


class Solution:
    def checkStraightLine(self, coordinates) -> bool:
        x1 = coordinates[0][0]
        y1 = coordinates[0][1]
        x2 = coordinates[1][0]
        y2 = coordinates[1][1]
        k = (y2 - y1) / (x2 - x1)
        b = y2 - k * x2
        for x, y in coordinates:
            if y != k * x + b:
                return False
        return True


print(Solution().checkStraightLine([[1,1],[2,2],[3,4],[4,5],[5,6],[7,7]]))
print(Solution().checkStraightLine([[1,3],[2,5],[3,7],[4,9],[5,11]]))

