# Enter your code here. Read input from STDIN. Print output to STDOUT
m = int(input())
lm = set(map(int, input().split()))
n = int(input())
ln = set(map(int, input().split()))
lst = []
for i in lm:
    if i not in ln:
        lst.append(i)
for i in ln:
    if i not in lm:
        lst.append(i)
lst.sort()
for i in lst:
    print(i)