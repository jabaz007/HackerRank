# Enter your code here. Read input from STDIN. Print output to STDOUT
from itertools import combinations

l, i = input().split()
lst = sorted([c for c in l])
for a in range(int(i)):
    combi = list(combinations(lst, a+1))
    for c in combi:
        print(''.join(c))