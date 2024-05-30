# Enter your code here. Read input from STDIN. Print output to STDOUT
from collections import OrderedDict

n = int(input())
od = OrderedDict()
for i in range(n):
    lst = input()
    pos = lst.rfind(' ')
    
    if od.get(lst[:pos]) is None:
        od[lst[:pos]] = int(lst[pos:])
    else:
        od[lst[:pos]] = od.get(lst[:pos]) + int(lst[pos:])
        
for k, v in od.items():
    print(k,v)