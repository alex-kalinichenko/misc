# A phrase is a palindrome, if, after converting all, uppercase, letters into
# lowercase letters and removing all, non—alphanumeric characters, it reads the
# same forward and backward. Alphanumeric characters include letters and numbers.
# Given a string s, return true if it is a palindrome, or false otherwise.
# Example:
# Input: "race a car"
# Output: false
# Explanation: "raceacar" is not a palindrome.


candidates = ["raceacar", "Kayak", "race a car", "race 2 a car", "2Kayak 2"]


def is_palindrome(candidate):
    candidate = candidate.lower()
    candidate = "".join(filter(str.isalnum, candidate))
    return candidate == candidate[::-1]


for candidate in candidates:
    print("{}: {}".format(candidate, is_palindrome(candidate)))
