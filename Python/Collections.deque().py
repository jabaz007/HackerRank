# Enter your code here. Read input from STDIN. Print output to STDOUT
from collections import deque

d = deque()
n = int(input())

for i in range(n):
    lst = input().split()
    
    if lst[0] == 'append':
        d.append(int(lst[1]))
    
    if lst[0] == 'appendleft':
        d.appendleft(int(lst[1]))
    
    if lst[0] == 'pop':
        d.pop()
    
    if lst[0] == 'popleft':
        d.popleft()

print(*d)