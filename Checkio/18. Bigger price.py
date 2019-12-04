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
    print(limit)
    print(data)
    max_price = 0
    for i in data:
        print(i)
        #print({}.keys())
        #print({}.get("key", "No key"))
        #print({}.get("value", "No value"))
        for k, v in i.items():
            print("k =", k)
            print("v =", v)
            print("Is it all?")
            if v == int():
                #max_price = v


    return max_price = v


print(bigger_price(2, [
    {"name": "bread", "price": 100},
    {"name": "wine", "price": 138},
    {"name": "meat", "price": 15},
    {"name": "water", "price": 1}  ]))