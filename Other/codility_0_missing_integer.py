# MissingInteger
"""
This is a demo task.
Write a function that, given an array A of N integers, returns the smallest positive
integer (greater than 0) that does not occur in A.
For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
Given A = [1, 2, 3], the function should return 4.
Given A = [−1, −3], the function should return 1.
Write an efficient algorithm for the following assumptions:
N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000]. """

import unittest


def solution_naive(A):

    a = sorted(list(set(A)))
    arr = list(range(min(a), max(a) + 1))
    for pos, el in enumerate(arr):
        if el != a[pos]:
            if el <= 0:
                return 1
            else:
                return el
    return el + 1


def solution(A):
    a = []
    for i in A:
        if i > 0:
            a.append(i)
    a = sorted(list(set(A)))
    arr = list(range(min(a), max(a) + 1))
    for pos, el in enumerate(arr):
        if el != a[pos]:
            if el <= 0:
                return 1
            else:
                return el
    return el + 1


class Test(unittest.TestCase):
    def test_1(self):
        self.assertEqual(solution_naive([-1, -3]), 1)

    def test_2(self):
        self.assertEqual(solution_naive([1, 2, 4]), 3)

    def test_3(self):
        self.assertEqual(solution_naive([1, 2, 3]), 4)

    def test_4(self):
        self.assertEqual(solution_naive([1, 3, 6, 4, 1, 2]), 5)


class Test_1(unittest.TestCase):
    def test_1(self):
        self.assertEqual(solution([1, 2, 4]), solution_naive([1, 2, 4]))


if __name__ == '__main__':
    unittest.main()
