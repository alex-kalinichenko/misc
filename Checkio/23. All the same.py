# In this mission you should check if all elements in the given list are equal.
# Input: List.
# Output: Bool.
# Example:
# all_the_same([1, 1, 1]) == True
# all_the_same([1, 2, 1]) == False
# all_the_same(['a', 'a', 'a']) == True
# all_the_same([]) == True
# The idea for this mission was found on Python Tricks series by Dan Bader
# Precondition: all elements of the input list are hashable


from typing import List, Any


def all_the_same(elements: List[Any]) -> bool:
    print(elements[1:])
    print(elements[:-1])
    return elements[1:] == elements[:-1]


print(all_the_same([10, 11, 12, 13, 14, 15]))
print(all_the_same([1, 1, 1]))
print(all_the_same([1, 2, 1]))


def all_the_same_1(elements: List[Any]) -> bool:
    return True if len(set(elements)) <= 1 else False
# The set will eliminate all the duplicates in your list, so if the
# length of the set is 1 it means that all the elements are the same.

print(all_the_same_1([10, 11, 12]))
print(all_the_same_1([1, 1, 1]))
print(all_the_same_1([1, 2, 1]))





if __name__ == '__main__':
    print("Example:")
    print(all_the_same([1, 1, 1]))

    # These "asserts" are used for self-checking and not for an auto-testing
    assert all_the_same([1, 1, 1]) == True
    assert all_the_same([1, 2, 1]) == False
    assert all_the_same(['a', 'a', 'a']) == True
    assert all_the_same([]) == True
    assert all_the_same([1]) == True
    print("Coding complete? Click 'Check' to earn cool rewards!")






'''from typing import List, Any

check = True
i = 1


def all_the_same(elements: List[Any]) -> bool:
    # your code here
    List = []
    for i in List:
        if List[i - 1] == List[i] and check = True:
            check = True
        else:
            False

    return True


# print("1st 3 Values :", my_list[0:3])

if __name__ == '__main__':
    print("Example:")
    print(all_the_same([1, 1, 1]))

    # These "asserts" are used for self-checking and not for an auto-testing
    assert all_the_same([1, 1, 1]) == True
    assert all_the_same([1, 2, 1]) == False
    assert all_the_same(['a', 'a', 'a']) == True
    assert all_the_same([]) == True
    assert all_the_same([1]) == True
    print("Coding complete? Click 'Check' to earn cool rewards!")'''
