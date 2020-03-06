'''1. Определение количества различных подстрок с использованием хеш-функции. Пусть на вход функции дана строка.
Требуется вернуть количество различных подстрок в этой строке.

'''


import hashlib

def sbstr_search(s:str, verbose = False) -> int:
    assert len(s) > 0, 'Строка не должна быть пустой'

    len_s = len(s)
    hash_subs = set()

    for i in range(len_s + 1):
        for j in range(i + 1, len_s + 1):
            sh = hashlib.sha1(s[i:j].encode('utf-8')).hexdigest()

            hash_subs.add(sh)

    if verbose:
        print(f'Список подстрок: {hash_subs}')

    return len(hash_subs)


strng = input('Введите строку: ')
print(f'Количество подстрок в строке: {sbstr_search(strng)} ')


