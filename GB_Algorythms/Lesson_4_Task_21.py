# Решето Эратосфена: алгоритм нахождения всех простых (которые не составные)
# чисел до заданного числа N.


def sieve_er(n):
    sieve = [i for i in range(n)]
    sieve[1] = 0
    for i in range(2, n):
        if sieve[i] != 0:
            j = i * 2

            while j < n:
                sieve[j] = 0
                j += i
    return [i for i in sieve if i != 0]



# "Lesson_4_Task_20.sieve_er(10)"
# 1000 loops, best of 5: 2.44 usec per loop


# "Lesson_4_Task_20.sieve_er(10000)"
# 1000 loops, best of 5: 3.3 msec per loop

