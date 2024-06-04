# Enter your code here. Read input from STDIN. Print output to STDOUT
from collections import Counter

n = int(input())
lst = [input().strip() for _ in range(n)]
res = Counter(lst)
print(len(res))
print(*res.values())
