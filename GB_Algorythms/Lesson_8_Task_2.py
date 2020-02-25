# 2. Доработать алгоритм Дейкстры (рассматривался на уроке), чтобы он
# дополнительно возвращал список вершин, которые необходимо обойти.

g = [
    [0, 0, 1, 1, 9, 0, 0, 0],
    [0, 0, 9, 4, 0, 0, 5, 0],
    [0, 9, 0, 0, 3, 0, 6, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 1, 0],
    [0, 0, 0, 0, 0, 0, 5, 0],
    [0, 0, 7, 0, 8, 1, 0, 0],
    [0, 0, 0, 0, 0, 1, 2, 0],
]


def dijkstra(graph, start):
    length = len(graph)
    is_visited = [False] * length   # отмечаем посещали мы эту вершину или нет
    cost = [float('inf')] * length  # стоимость пути до вершины. Сейчас там бесконечность
    # print(cost)
    parent = [-1] * length          # родитель для вершины

    cost[start] = 0
    min_cost = 0  # переменная показывает двигаемся мы по графу или уже нет

    while min_cost < float('inf'):

        is_visited[start] = True  # отмечаем стартовую вершину как посещённую

        # в цикле пройдёмся по той строке матрицы смежности графа где хранится
        # значение start. Если мы начали с нулевой вершины, то по нулевой строке
        for i, vertex in enumerate(graph[start]):
            # print('i=', i, 'vertex=', vertex)
            # если есть ребро и не посещали, то проверяем расстояние
            if vertex != 0 and not is_visited[i]:

                # если расстояние больше, то производим замену
                if cost[i] > vertex + cost[start]:
                    cost[i] = vertex + cost[start]  # записываем новое расстояние
                    parent[i] = start  # указываем какая вершина родительская

        # т.о. мы обошли все смежные вершины и записали минимальные расстояния для них

        min_cost = float('inf')
        # цикл который пройдёт по всем вершинам графа
        for i in range(length):
            if min_cost > cost[i] and not is_visited[i]:
                min_cost = cost[i]
                start = i  # запомнили что теперь данная вершина - стартовая

    routes = []
    for i in range(length):
        j = i
        route = [i]
        while parent[j] != -1:
            route.append(parent[j])
            j = parent[j]
        routes.append(route)

    return cost, routes


s = int(input('От какой вершины идти: '))
print(dijkstra(g, s))