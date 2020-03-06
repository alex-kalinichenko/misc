"""
Определение количества различных подстрок с использованием хеш-функции. Пусть на вход функции дана строка. Требуется вернуть количество различных подстрок в этой строке.
Примечания:
* в сумму не включаем пустую строку и строку целиком;
* без использования функций для вычисления хэша (hash(), sha1() или любой другой из модуля hashlib задача считается не решённой.
"""
import hashlib

# Не очень до меня дошло задание, но вроде сделал, что написано в условии
def find_s(s: str):
    assert len(s) > 0, 'Строка не может быть пустой'

    s_len = len(s) - 1
    cnt = s_len

    for i in range(cnt + 1):
        if hashlib.sha1(s[i:i + cnt].encode('utf-8')).hexdigest():
            cnt -= 1
            s_len += 1

    return s_len


def main():
    s = input('Введите строку: ')
    print(f'Возможных подстрок: {find_s(s)}')

if __name__ == '__main__':
    main()
