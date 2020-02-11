import mysql.connector

mydb = mysql.connector.connect(
  host="localhost:3306",
  user="root",
  passwd="1",
  database="mysql_db1"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM customers")

myresult = mycursor.fetchone()

print(myresult)


#======================================

# import sqlalchemy as db
#
# # specify database configurations
# config = {
#     'host': 'localhost',
#     'port': 3306,
#     'user': 'newuser',
#     'password': '1',
#     'database': 'mysql_db'
# }
# db_user = config.get('user')
# db_pwd = config.get('password')
# db_host = config.get('host')
# db_port = config.get('port')
# db_name = config.get('database')
# # specify connection string
# connection_str = f'mysql+pymysql://{db_user}:{db_pwd}@{db_host}:{db_port}/{db_name}'
# # connect to database
# engine = db.create_engine(connection_str)
# connection = engine.connect()
# # pull metadata of a table
# metadata = db.MetaData(bind=engine)
# metadata.reflect(only=['test_table'])
#
# test_table = metadata.tables['test_table']
# test_table

#===============================================


# import pyodbc
#
# connection = pyodbc.connect('Driver={ODBC Driver 17 for SQL Server};'
#                       'Server=localhost:3306;'
#                       'Database=mysql_db1;'
#                       'UID=root;'
#                       'PWD=1')
#
# mycursor = mydb.cursor()
# mycursor.execute("CREATE DATABASE mydatabase")
#
# print("Database Created")
#
# mycursor.execute("SHOW DATABASES")
# for x in mycursor:
#   print(x)

#=============================================

# import sqlite3
# sqlite_db_conn = sqlite3.connect('sqlite.db')
# print("Database Created")
# sqlite_db_conn.close()



