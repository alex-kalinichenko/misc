print(sorted([5, 2, 3, 1, 4]))
print(sorted({4: 'E', 5: 'A', 2: 'B', 1: 'D', 3: 'B'}))

print(sorted("This is a test string from Andrew".split(), key=str.lower))
print(sorted("This is a test string from Andrew".split()))

student_tuples = [('john', 'A', 15),
                  ('jane', 'B', 12),
                  ('dave', 'B', 10), ]
print(sorted(student_tuples, key=lambda student: student[2]))   # sort by age

items = [{"name": "bread", "price": 100},
        {"name": "wine", "price": 138},
        {"name": "meat", "price": 15},
        {"name": "water", "price": 1}]

items1 = sorted(items, key=lambda x: x['price'], reverse=True)
print(items1)
print(sorted(items, key=lambda x: x['price'], reverse=True)[0:3])

pop_words = 'When I was One I had just begun When I was Two I was nearly new'
pop_words_list = pop_words.lower().split()
print(pop_words_list)
for word in pop_words_list:
    print(word, pop_words.count(word))
