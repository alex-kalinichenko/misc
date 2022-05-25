import pandas as pd

d = {'col1': [1.2, 2.24], 'col2': [3, 4]}
df = pd.DataFrame(data=d)
print(df)

df = df.astype('int32')

print(df.dtypes)
print(df)
