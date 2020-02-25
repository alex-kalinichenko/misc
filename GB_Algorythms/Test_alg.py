



# ============================================
'''
import random
# Генератор случайного графа, в котором нет петель у каждой вершины есть как минимум один вход и выход.- Сильная связанность
# Граф описывается  списком смежностей
def graph_generation(number_vertices):
    graph = []
    is_in = [False] * number_vertices
    for i in range(number_vertices):
        number_edges = random.randint(1, number_vertices - 1)
        graph.append([])
        l = 0
        while l < number_edges:
            vertex = random.randint(0, number_vertices - 1)
            if vertex != i and not vertex in graph[i]:
                graph[i].append(vertex)
                is_in[vertex] = True
                l += 1
# Проверим во всех ли вершинах есть вход
    for i, data in enumerate(is_in):
        if not data:
            while not data:
                choice = random.randint(0, number_vertices - 1)
                if choice != i:
                    graph[choice].append(i)
                    is_in[i] = True
                    data = True

    return graph
# Генерация графов без проверки входов. -Возможна слабая связанность
def graph_generation_2(number_vertices):
    graph = []
    for i in range(number_vertices):
        number_edges = random.randint(1, number_vertices - 1)
        graph.append([])
        l = 0
        while l < number_edges:
            vertex = random.randint(0, number_vertices - 1)
            if vertex != i and not vertex in graph[i]:
                graph[i].append(vertex)
                l += 1

    return graph


def dfs(graph, start,visited=[]):
    if len(visited)==0:
        visited=[]
    visited.append(start)
    for i in graph[start]:
        if i not in visited:
            dfs(graph, i,visited)
    return visited


n=int(input('Введите количество вершин'))
inp=int(input("Введите точку входа"))

# Выведем граф с сильной связностью
graph=graph_generation(n)
print(graph)
print(dfs(graph,inp))

# Выведем граф без гарантии сильной связанности
graph_2=graph_generation_2(n)
print(graph_2)
print(dfs(graph_2,inp))

'''

##################################################################
'''
import random


def get_graph(c):
    result = []
    all_nodes = {i for i in range(c)}
    for i in range(c):
        result.append(random.sample(list(all_nodes - {i}), random.randint(1, c - 1)))
    return result


def dfs(g, node, v=[]):
    v.append(node)
    for n in g[node]:
        if n not in v:
            dfs(g, n, v)
    return v


count = int(input('Число вершин: '))
start = int(input('Начальная вершина: '))
graph = get_graph(count)
print('Исходный граф: ', graph)
print('Обход графа: ', dfs(graph, start))'''

##########################################################


'''import random


def generate_graph(n):
    graph = []
    for i in range(n):
        graph.append([])
        for j in range(random.randint(1, n // 2)):
            while True:
                x = random.randint(0, n - 1)
                if x != i and x not in graph[i]:
                    break
            graph[i].append(x)

    return graph


def dfs(graph, start):
    visited, stack = set(), [start]
    while stack:
        vertex = stack.pop()
        for i in graph[vertex]:
            if i not in visited:
                stack.append(i)
        visited.add(vertex)
    return visited


n = int(input('Введите кол-во вершин: '))
graph = generate_graph(n)
print(graph)
# graph = [[4, 1, 2], [0, 3], [3], [0, 2, 4], [3, 0]]

print(dfs(graph, 1))'''
