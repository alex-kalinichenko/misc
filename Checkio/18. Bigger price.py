'''You have a table with all available goods in the store. The data is represented
as a list of dicts. Your mission here is to find the TOP most expensive goods.
The amount we are looking for will be given as a first argument and the whole
data as the second one
Input: int and list of dicts. Each dicts has two keys "name" and "price"
Output: the same as the second Input argument.

bigger_price(1, [
    {"name": "pen", "price": 5},
    {"name": "whiteboard", "price": 170}
]) == [{"name": "whiteboard", "price": 170}]

bigger_price(2, [
    {"name": "bread", "price": 100},
    {"name": "wine", "price": 138},
    {"name": "meat", "price": 15},
    {"name": "water", "price": 1}
]) == [
    {"name": "wine", "price": 138},
    {"name": "bread", "price": 100}
]                                             '''

def bigger_price(limit: int, data: list) -> list:
    top_items = []
    item = []
    for i in range(limit):
        price = 0
        print("i=", 1)
        for dict in data:
            print(dict)
            list = []
            for v in dict.values():
                #print(v)
                list.append(v)
            #print("list = ", list)
            if int(list[1]) > price:
                price = int(list[1])
                item = list[0]
            print("The most expensive item is: ", item, "for", price, "$")
        top_items.append(item)
        print("top items", top_items)




# print(bigger_price(2, [
#     {"name": "bread", "price": 100},
#     {"name": "wine", "price": 138},
#     {"name": "meat", "price": 15},
#     {"name": "water", "price": 1}  ]))


#  auto-testing
# if __name__ == '__main__':
#     assert medic(29, 90) == "хорошее состояние"
#     assert medic(31, 121) == "следует заняться собой"
#     assert medic(31, 49) == "следует заняться собой"
#     assert medic(41, 121) == "следует обратиться к врачу!"
#     assert medic(41, 49) == "следует обратиться к врачу!"
#     print("Tests were finished successfully!")


if __name__ == '__main__':
    from pprint import pprint
    print('Example:')
    pprint(bigger_price(2, [
        {"name": "bread", "price": 100},
        {"name": "wine", "price": 138},
        {"name": "meat", "price": 15},
        {"name": "water", "price": 1}]))

    # These "asserts" using for self-checking and not for auto-testing
    assert bigger_price(2, [
        {"name": "bread", "price": 100},
        {"name": "wine", "price": 138},
        {"name": "meat", "price": 15},
        {"name": "water", "price": 1}
    ]) == [
        {"name": "wine", "price": 138},
        {"name": "bread", "price": 100}]

    assert bigger_price(1, [
        {"name": "pen", "price": 5},
        {"name": "whiteboard", "price": 170}
    ]) == [{"name": "whiteboard", "price": 170}]

    print('Done! Looks like it is fine. Go and check it')