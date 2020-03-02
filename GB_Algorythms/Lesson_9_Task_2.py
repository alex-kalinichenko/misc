# 2. Закодируйте любую строку по алгоритму Хаффмана.

# from binarytree import bst, build
# from collections import OrderedDict, Counter
#
# s = 'beep boop beer!'
# # let_dict = {}
# let_dict = OrderedDict()
# num_list = []
# # проходим строку побуквенно
# for letter in s:
#     # считаем сколько раз символ встречается в строке
#     num_of_letter = s.count(letter)
#     # print('letter ', letter, ' встречается ', num_of_letter, ' раз')
#
#     # добавляем символ и кол-во вхождений в словарь
#     let_dict[letter] = num_of_letter
# print(let_dict)
# # сортируем по возростанию
# let_dict = OrderedDict(sorted(let_dict.items(), key=lambda x: x[1]))
# print(let_dict)
#
# # собриаем значения в лист
# for value in let_dict.values():
#     num_list.append(value)
# # разворачиваем лист
# num_list.reverse()
# print(num_list)
#
# tree = build(num_list)
# print(tree)
#
# print(Counter(s))




# ==========================================================

# https://github.com/elluscinia/smoothsort/wiki/Восхваление-heapq.-О-Кучах

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


# s = input("Введите строку для кодировки: ")
s = 'beep boop beer!'
code = huffman_encode(s)
encoded = "".join(code[ch] for ch in s)

# print('Кол-во символов: ', len(code))
# print('Кол-во символов в закодированной строке: ', len(encoded))

for ch in sorted(code):
    print("{}: {}".format(ch, code[ch]))
print('Закодированная строка: ', encoded)



# =======================================================================

# from collections import Counter, deque
#
#
# class MyNode:
#
#     def __init__(self, left=None, right=None):
#         self.left = left
#         self.right = right
#
#
# def haffman_tree(s):
#     '''
#     Построение дерева для кодирования по алгоритму Хаффмана
#     '''
#
#     count_s = Counter(s)
#     print('count_s= ', count_s)
#
#     sorted_s = deque(sorted(count_s.items(), key=lambda item: item[1]))
#     print('sorted_s=', sorted_s)
#
#     while len(sorted_s) > 1:
#
#         weight = sorted_s[0][1] + sorted_s[1][1]
#         print('weight=', weight)
#         node = MyNode(left=sorted_s.popleft()[0], right=sorted_s.popleft()[0])
#         print('node=', node)
#
#         # Вставка пары "узел, вес" на нужное место в список
#         for i, item in enumerate(sorted_s):
#             if weight > item[1]:
#                 continue
#             else:
#                 sorted_s.insert(i, (node, weight))
#                 break
#         else:
#             sorted_s.append((node, weight))
#
#     return sorted_s[0][0]
#
#
# code_table = dict()
#
#
# def haffman_code(tree, path=''):
#     '''
#     Составление таблицы кодирования по дереву
#     '''
#
#     if not isinstance(tree, MyNode):
#         code_table[tree] = path
#
#     else:
#         haffman_code(tree.left, path=f'{path}0')
#         haffman_code(tree.right, path=f'{path}1')
#
#
# # s = input('Введите строку для кодировки: ')
# s = 'beep boop beer!'
# # Формирование таблицы кодирования
# haffman_code(haffman_tree(s))
#
# for i in s:
#
#     print(code_table[i], end=' ')
#
# print()