# Enter your code here. Read input from STDIN. Print output to STDOUT
from itertools import product

K, M = map(int, input().split())

N = (list(map(int, input().split()))[1:] for _ in range(K))

mxl = []
for item in product(*N):
    S = 0
    for val in item:
        S += val**2
    mx = S % M
    mxl.append(mx)
    
print(max(mxl))