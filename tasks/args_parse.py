import sys
import os

print('run')
if sys.argv[0].find('temp') == -1:
    print('yes')
print(sys.argv[0])
print(sys.argv)
print(sys.argv[0].find('temp'))
print(os.path.basename(__file__))