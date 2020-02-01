# Алгоритм перебора делителей заключается в последовательном делении заданного
# натурального числа на все целые числа, начиная с двойки и заканчивая
# значением меньшим или равным квадратному корню из тестируемого числа.
#
# Если хотя бы один делитель делит исследуемое число без остатка, то это число
# является составным. Если ни одного такого делителя не находится, то число
# признается простым.

# https://younglinux.info/algorithm/divider

def prime(kol_vo_prostyh):
    tek_prostoe = 2
    por_no_tek_prostogo = 1
    proveryaemoe_chislo = 3

    while por_no_tek_prostogo < kol_vo_prostyh:
        is_prime = True
        for divider in range(2, int(proveryaemoe_chislo ** 0.5)):  # соптимизировать корень
            print(proveryaemoe_chislo)
            print(divider)
            if proveryaemoe_chislo / divider != 0:
                is_prime = False
                break
        if is_prime is True:
            por_no_tek_prostogo += 1
            tek_prostoe += 1
        proveryaemoe_chislo += 1
    return tek_prostoe


#print(prime(5))


def prime_check(number):
    for divider in range(2, int(number ** 0.5)):  # соптимизировать корень
        print(int(number ** 0.5))
        print(number)
        print(divider)
        if number / divider != 0:
            print("Не простое")
            break
    print("Простое")
    return None


print(prime_check(16))

