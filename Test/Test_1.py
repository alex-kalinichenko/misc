list1 = [[10,11],[12,22],[13,14],[15,16],[17,18],[19,20]]
print(list1[4][0])
print(list1[5][1])
for x, y in list1:
    print(x, y)

print('32 бита - 2^32 =', 2**32)

x = 123454321
str_x = str(x)
lenght = int(len(str(x)))
half_lenght = int(lenght / 2)
print(str_x[:half_lenght])
print(str_x[:half_lenght:-1])
print(int(7/2))