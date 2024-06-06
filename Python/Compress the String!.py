# Enter your code here. Read input from STDIN. Print output to STDOUT
from itertools import groupby

groups = []
data = input()
for k, g in groupby(data):
    groups.append((len(list(g)), int(k)))
    
print(*groups)
