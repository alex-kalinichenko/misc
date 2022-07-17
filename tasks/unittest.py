import unittest
from itertools import product

def solution(a, b):

	return a * b
	
class Test(unittest.TestCase):
	def test_1(self):
		for (a, b) in product(range(1, 10), repeat=2):
			self.assertEqual(solution(a, b), a * b, f'error vith values: {a}, {b}')
	
if __name__ == '__main__':
	unittest.main()