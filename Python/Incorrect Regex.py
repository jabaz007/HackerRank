# Enter your code here. Read input from STDIN. Print output to STDOUT
# ON HACKER RANK SELECT PYPY3 COMPILER FOR THIS CODE TO WORK
import re

n = int(input())
for i in range(n):
    try:
        x = bool(re.compile(input()))
        print(x)
    except re.error:
        print('False')
