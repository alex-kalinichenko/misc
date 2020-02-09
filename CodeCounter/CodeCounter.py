import os
from datetime import datetime, date, time

line_num = 0
for root, dirs, files in os.walk(r"C:\Users\Alexx\Documents\IT\PycharmProjects\Misc"):
    for file in files:
        if file.endswith(".py") and file:
            print(os.path.join(root, file))
            with open(os.path.join(root, file), "r", encoding="utf-8") as file_obj:
                for line in file_obj:
                    if not line.startswith("#") or line.startswith('"'):
                        line_num += 1
#print(line_num)
# print(datetime.today())
# print(datetime.today().date())
# print(datetime.strftime(datetime.now(), "%Y.%m.%d %H:%M:%S"))
try:
    with open(r"C:\Users\Alexx\Documents\IT\PycharmProjects\Misc\CodeCounter\CodeCounter.txt",
              "a", encoding="utf-8") as file_output:
        file_output.write(str(line_num) + ' ' +
                          str(datetime.strftime(datetime.now(), "%Y.%m.%d %H:%M:%S"))
                          + '\n')

except IOError:
    print("Ошибка")
