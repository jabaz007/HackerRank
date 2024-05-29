# Enter your code here. Read input from STDIN. Print output to STDOUT
n, m = input().split()
ab = list(input().split())
a = set(input().split())
b = set(input().split())
h = 0

for i in ab:
    if i in a:
        h = h+1
    if i in b:
        h = h - 1
print(h)