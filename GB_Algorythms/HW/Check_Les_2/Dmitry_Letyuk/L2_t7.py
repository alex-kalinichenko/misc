# 7. Написать программу, доказывающую или проверяющую, что для множества натуральных чисел выполняется равенство:
# 1+2+...+n = n(n+1)/2, где n — любое натуральное число.

n = int(input('введите n '))
res_1 = 0
for i in range(0, n+1):
    res_1 = res_1 + i
print(res_1)

res = n * (n + 1) / 2
print(int(res))