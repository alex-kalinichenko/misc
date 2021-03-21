def compareTriplets(a, b):
    #a = list(a)
    #b = list(b)
    for i in (a, b):
        print(a[i], b[i])

    return None


print(compareTriplets((5, 6, 7), (3, 6, 10)))

''' if a[i] == b[i]:
            pass
        if a[i] > b[i]:
            alice =+ 1
        if a[i] < b[i]:
            bob =+ 1  '''

num_list = []

for i in range(5):
    num_list.append(random.randrange(1, 9))
for i in num_list:
    print(i)