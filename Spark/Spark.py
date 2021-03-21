import pandas as pd
import matplotlib.pyplot as plt

table = pd.read_excel('Spark.xlsx')
x = table.values[:, 6]
y = table.values[:, 7]

plt.figure(figsize=(15, 7))
plt.plot(x, y)
plt.show()

