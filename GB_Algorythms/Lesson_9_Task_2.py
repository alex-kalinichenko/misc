# 2. Закодируйте любую строку по алгоритму Хаффмана.

from binarytree import bst, build
from collections import OrderedDict, Counter

s = 'beep boop beer!'
# let_dict = {}
let_dict = OrderedDict()
num_list = []
# проходим строку побуквенно
for letter in s:
    # считаем сколько раз символ встречается в строке
    num_of_letter = s.count(letter)
    # print('letter ', letter, ' встречается ', num_of_letter, ' раз')

    # добавляем символ и кол-во вхождений в словарь
    let_dict[letter] = num_of_letter
print(let_dict)
# сортируем по возростанию
let_dict = OrderedDict(sorted(let_dict.items(), key=lambda x: x[1]))
print(let_dict)

# собриаем значения в лист
for value in let_dict.values():
    num_list.append(value)
# разворачиваем лист
num_list.reverse()
print(num_list)

tree = build(num_list)
print(tree)

print(Counter(s))

# ==========================================================

import heapq
from collections import Counter, namedtuple


class Node(namedtuple("Node", ["left", "right"])):
    def walk(self, code, acc):
        self.left.walk(code, acc + "0")
        self.right.walk(code, acc + "1")


class Leaf(namedtuple("Leaf", ["char"])):
    def walk(self, code, acc):
        code[self.char] = acc or "0"


def huffman_encode(s):
    h = []
    for ch, freq in Counter(s).items():
        h.append((freq, len(h), Leaf(ch)))
    heapq.heapify(h)
    count = len(h)
    while len(h) > 1:
        freq1, _count1, left = heapq.heappop(h)
        freq2, _count2, right = heapq.heappop(h)
        heapq.heappush(h, (freq1 + freq2, count, Node(left, right)))
        count += 1
    code = {}
    if h:
        [(_freq, _count, root)] = h
        root.walk(code, "")
    return code


s = input("Введите строку для кодировки: ")
code = huffman_encode(s)
encoded = "".join(code[ch] for ch in s)
print('Кол-во символов: ', len(code))
print('Кол-во символов в закодированной строке: ', len(encoded))
for ch in sorted(code):
    print("{}: {}".format(ch, code[ch]))
print('Закодированная строка: ', encoded)
