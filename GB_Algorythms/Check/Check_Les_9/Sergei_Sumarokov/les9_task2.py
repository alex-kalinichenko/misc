"""
Закодируйте любую строку по алгоритму Хаффмана.
"""
import heapq
from collections import Counter, namedtuple


class Node(namedtuple('Node', ['left', 'right'])):      # Нода дерева
    def walk(self, code, acc):
        self.left.walk(code, acc + '0')
        self.right.walk(code, acc + '1')


class Leaf(namedtuple('Leaf', ['char'])):       # Лист дерева
    def walk(self, code, acc):
        code[self.char] = acc or '0'            # 0 - чтобы можно было кодировать одну букву


def huffman(s):
    h = []
    for ch, freq in Counter(s).items():         # Пара из символа и частоты
        h.append((freq, len(h), Leaf(ch)))

    heapq.heapify(h)                            # Очередь с приорететами

    count = len(h)
    while len(h) > 1:                           # Пока в очереди есть хотя бы два приоретета
        freq1, _count1, left = heapq.heappop(h)          # Достаем элемент с минимальной частотой
        freq2, _count2, right = heapq.heappop(h)         # И следующий за ним элемент с мин частотой
        heapq.heappush(h, (freq1 + freq2, count, Node(left, right)))
        count += 1

    code = {}
    if h:                                       # Фильтруем пустую строку
        [(_freq, _count, root)] = h
        root.walk(code, "")

    return code


def main():
    s = input('Введите строку: ')

    code = huffman(s)
    encoded = "".join(code[ch] for ch in s)

    print(f'Кол-во уникальных символов равно {len(code)}\nДлина закодированой строки равна {len(encoded)}')
    for ch in sorted(code):
        print(f'{ch}: {code[ch]}')      # Как мы кодируем каждый символ

    print(f'Наша закодированая строка: {encoded}')


if __name__ == '__main__':
    main()
