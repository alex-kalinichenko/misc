import pandas as pd
import datetime
import pyodbc

# df = pd.DataFrame() # создаем пустой датафрейм
with pyodbc.connect('Driver={SQL Server};'
                      'Server=wruled008;'
                      'Database=AVM_WINTERSH;'
                      'UID=user_name;'
                      'PWD=pass') as conn:
    with conn.cursor() as cursor:
        # cursor.execute('show databases')
        cursor.execute('SELECT OIL_MASS FROM dbo.VT_WIRF_TOT_DAY_en_US')

        # cursor.execute('SELECT START_DATETIME FROM dbo.VT_WIRF_PTEST_en_US')
        # cursor.execute('SELECT LIQUID_MASS FROM dbo.VT_ACT_DAY_en_US')
        # cursor.execute('SELECT CASING_PRESS1 FROM dbo.VT_WELL_READ_DAY_en_US') #  долгий запрос
        # cursor.execute('SELECT WH_PRESS FROM dbo.VT_WELL_READ_DAY_en_US') #  долгий запрос
        # cursor.execute('SELECT WH_PRESS FROM dbo.VT_WELL_READ_DAY_en_US') #  долгий запрос
        # cursor.execute('SELECT CHOKE_1 FROM dbo.VT_WELL_READ_DAY_en_US') #  долгий запрос
    # print (df)
        for row in cursor:
            for value in row:
                print('value=', str(value))
            print('row=', row)
            print('-------------------------------------------------------------')

        print('=' * 15)
        results = cursor.fetchall()
        results2 = cursor.fetchall()
        print(results)   # [('A Cor Do Som',), ('Aaron Copland & London Symphony Orchestra',), ('Aaron Goldberg',)]
        print(results2)  # []