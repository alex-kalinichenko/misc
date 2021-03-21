n = 6
spaces_num = n - 1
hash_num = 1
for i in range(0, n):
    print(" " * spaces_num, "#" * hash_num)
    spaces_num -= 1
    hash_num += 1

print()

def staircase(n):
    spaces_num = n - 1
    hash_num = 1
    for i in range(0, n):
        print(" " * spaces_num, "#" * hash_num)
        spaces_num -= 1
        hash_num += 1
    return print()
print(staircase(7))


def staircase(n):
    m = n
    spaces_num = n - 1
    hash_num = 1
    for i in range(0, n):
        print(" " * spaces_num, "#" * hash_num)
        spaces_num -= 1
        hash_num += 1
    return
